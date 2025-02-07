<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.blog_list' , compact('blogs'));
    }

    public function addEditBlog()
    {
        return view('admin.blog.add_edit_blog');
    }

//     public function blogStore(Request $request)
// {

//     // Validate incoming request
//     $request->validate([
//         'title' => 'required|string|max:255',
//         'description' => 'required|string',
//         'link' => 'required|string|max:255',
//         'meta_description' => 'nullable|string',
//         'meta_keywords' => 'nullable|string',
//         'html_content' => 'required',
//     ]);

//     // Handle the image upload
//     if ($request->hasFile('image')) {
//         // Store the file in the 'public/images' directory and get the path
//         $imagePath = $request->file('image')->store('public/images');
//         // Generate the URL for the stored image
//         $imageUrl = basename($imagePath);
//     } else {
//         $imageUrl = null; // Fallback if no image is uploaded
//     }

//     // Create a new blog post
//     Blog::create([
//         'title' => $request->title,
//         'description' => $request->description,
//         'slug' => $request->link,
//         'image' => $imageUrl, 
//         'meta_description' => $request->meta_description,
//         'meta_keywords' => $request->meta_keywords,
//         'html_content' => $request->html_content,

//     ]);

//     return redirect()->route('blog-list')->with('success_message', 'Blog created successfully!');
// }




public function blogStore(Request $request)
{
    // Validate incoming request
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'link' => 'required|string|max:255',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'html_content' => 'required',
        'meta_tags' => 'required|string',

        
    ]);

   


    // Handle the thumbnail image upload and resize
    if ($request->hasFile('thumbnail_image')) {
        $thumbnail = $request->file('thumbnail_image');
        $thumbnailImage = Image::make($thumbnail)->resize(360, 268);
        $thumbnailPath =  time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
        $thumbnailImage->save(storage_path('app/public/images/thumbnails/' . $thumbnailPath));
    } else {
        $thumbnailPath = null;
    }

    // Handle the banner image upload and resize
    if ($request->hasFile('banner_image')) {
        $banner = $request->file('banner_image');
        $bannerImage = Image::make($banner)->resize(1020, 496);
        $bannerPath =  time() . '_banner.' . $banner->getClientOriginalExtension();
        $bannerImage->save(storage_path('app/public/images/banners/' . $bannerPath));
    } else {
        $bannerPath = null;
    }

    $metaTags = json_decode($request->meta_tags, true);

  

    // Create a new blog post
    Blog::create([
        'title' => $request->title,
        'description' => $request->description,
        'slug' => $request->link,
        'thumbnail_image' => $thumbnailPath,
        'banner_image' => $bannerPath,
        'meta_description' => $request->meta_description,
        'meta_keywords' => $request->meta_keywords,
        'html_content' => $request->html_content,
        'meta_tags' => json_encode($metaTags),
    ]);

    return redirect()->route('blog-list')->with('success_message', 'Blog created successfully!');
}








public function edit($id)
{
    $blog = Blog::find($id);
    return view('admin.blog.edit', compact('blog'));
}

public function update(Request $request, $id)
{
    // Find the blog post
    $blog = Blog::find($id);

    // Validate incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'slug' => 'required|string|unique:blogs,slug,' . $id,
        'meta_description' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string|max:255',
        'html_content' => 'required|string',
        'meta_tags' => 'required|string',
    ]);
    
    // Handle image upload if new thumbnail image is provided
    if ($request->hasFile('thumbnail_image')) {
        // Delete old thumbnail image if exists
        if ($blog->thumbnail_image && file_exists(storage_path('app/public/images/thumbnails/' . $blog->thumbnail_image))) {
            unlink(storage_path('app/public/images/thumbnails/' . $blog->thumbnail_image));
        }
        
        // Resize and store new thumbnail image
        $thumbnailImage = $request->file('thumbnail_image');
        $thumbnailResized = Image::make($thumbnailImage)->resize(360, 268); // Resize to the same size as store
        $thumbnailImageName = time() . '_thumbnail.' . $thumbnailImage->getClientOriginalExtension();
        $thumbnailResized->save(storage_path('app/public/images/thumbnails/' . $thumbnailImageName));
        
        $blog->thumbnail_image = $thumbnailImageName;
    }

    // Handle image upload if new banner image is provided
    if ($request->hasFile('banner_image')) {
        // Delete old banner image if exists
        if ($blog->banner_image && file_exists(storage_path('app/public/images/banners/' . $blog->banner_image))) {
            unlink(storage_path('app/public/images/banners/' . $blog->banner_image));
        }

        // Resize and store new banner image
        $bannerImage = $request->file('banner_image');
        $bannerResized = Image::make($bannerImage)->resize(1020, 496); // Resize to the same size as store
        $bannerImageName = time() . '_banner.' . $bannerImage->getClientOriginalExtension();
        $bannerResized->save(storage_path('app/public/images/banners/' . $bannerImageName));

        $blog->banner_image = $bannerImageName;
    }

    $metaTags = json_decode($request->meta_tags, true);

    // Update the other fields
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->slug = $request->slug;
    $blog->meta_description = $request->meta_description;
    $blog->meta_keywords = $request->meta_keywords;
    $blog->html_content = $request->html_content;
    $blog->meta_tags = json_encode($metaTags);

    // Save the updated blog post
    $blog->save();

    return redirect()->route('blog-list')->with('success_message', 'Blog Updated successfully!');
}




}


