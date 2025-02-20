<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    public function index(Request $request)
    {

        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $blogs = Blog::query()->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderby('id' , 'desc')->paginate($perPage);
        return view('admin.blog.blog_list', compact('blogs', 'perPage'));
    }

    public function add()
    {
        return view('admin.blog.add_blog');
    }




    public function blogStore(Request $request)
    {
        $validated = $request->validate([
            'link' => 'unique:blogs,slug',  
            'thumbnail_image' => 'mimes:jpeg,jpg,png,gif,webp',  
            'banner_image' => 'mimes:jpeg,jpg,png,gif,webp',  

        ]);

        if ($request->hasFile('thumbnail_image')) {
            $thumbnail = $request->file('thumbnail_image');

            $thumbnailImage = Image::make($thumbnail);
            if ($thumbnailImage->width() < 360 || $thumbnailImage->height() < 268) {
                return back()->with(['error_message' => 'Thumbnail image must be at least 360x268 pixels.']);
            }

            $thumbnailImage->resize(360, 268);
            $thumbnailPath = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnailImage->save(storage_path('app/public/images/thumbnails/' . $thumbnailPath));
        } else {
            $thumbnailPath = null;
        }

        if ($request->hasFile('banner_image')) {
            $banner = $request->file('banner_image');

            $bannerImage = Image::make($banner);
            if ($bannerImage->width() < 1020 || $bannerImage->height() < 496) {
                return back()->with(['error_message' => 'Banner image must be at least 1020x496 pixels.']);
            }

            $bannerImage->resize(1020, 496);
            $bannerPath = time() . '_banner.' . $banner->getClientOriginalExtension();
            $bannerImage->save(storage_path('app/public/images/banners/' . $bannerPath));
        } else {
            $bannerPath = null;
        }

        $metaTags = json_decode($request->meta_tags, true);

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->link,
            'thumbnail_image' => $thumbnailPath,
            'banner_image' => $bannerPath,
            'html_content' => $request->html_content,
            'meta_tags' => json_encode($metaTags),
        ]);

        return redirect()->route('admin.blogList')->with('success_message', 'Blog created successfully!');
    }


    // public function edit($id)
    // {
    //     $blog = Blog::find($id);
    //     return view('admin.blog.edit', compact('blog'));
    // }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'slug' => 'unique:blogs,slug,' . $id,  
            'thumbnail_image' => 'mimes:jpeg,jpg,png,gif,webp',  
            'banner_image' => 'mimes:jpeg,jpg,png,gif,webp',  
            'meta_tags' => 'required|string',
        ]);
        // Find the blog post
        $blog = Blog::find($id);

        // Handle image upload if new thumbnail image is provided
        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImage = $request->file('thumbnail_image');
            $image = Image::make($thumbnailImage);
            $width = $image->width();
            $height = $image->height();
            if ($width < 360 || $height < 268) {
                return back()->with(['error_message' => 'Thumbnail image must be at least 360x268 pixels.']);
            }

            // Delete old thumbnail image if exists
            if ($blog->thumbnail_image && file_exists(storage_path('app/public/images/thumbnails/' . $blog->thumbnail_image))) {
                unlink(storage_path('app/public/images/thumbnails/' . $blog->thumbnail_image));
            }


            // Resize and store new thumbnail image
            $image->resize(360, 268);
            $thumbnailImageName = time() . '_thumbnail.' . $thumbnailImage->getClientOriginalExtension();
            $image->save(storage_path('app/public/images/thumbnails/' . $thumbnailImageName));

            $blog->thumbnail_image = $thumbnailImageName;
        }



        // Handle image upload if new banner image is provided
        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $image = Image::make($bannerImage);
            $width = $image->width();
            $height = $image->height();
            if ($width < 1020 || $height < 496) {
                return back()->with(['error_message' => 'Banner image must be at least 1020x496 pixels.']);
            }

            // Delete old banner image if exists
            if ($blog->banner_image && file_exists(storage_path('app/public/images/banners/' . $blog->banner_image))) {
                unlink(storage_path('app/public/images/banners/' . $blog->banner_image));
            }

            // Resize and store new banner image
            $image->resize(1020, 496);
            $bannerImageName = time() . '_banner.' . $bannerImage->getClientOriginalExtension();
            $image->save(storage_path('app/public/images/banners/' . $bannerImageName));

            $blog->banner_image = $bannerImageName;
        }

        $metaTags = json_decode($request->meta_tags, true);

        // Update the other fields
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->slug = $request->slug;
        $blog->html_content = $request->html_content;
        $blog->meta_tags = json_encode($metaTags);

        // Save the updated blog post
        $blog->save();

        return redirect()->route('admin.blogList')->with('success_message', 'Blog Updated Successfully!');
    }


    public function delete(string $id)
    {

        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('admin.blogList')->with('success_message', 'Blog Deleted Successfully!');
    }
}
