<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BannerController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');

        $banners = Banner::query()
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderby('id' , 'desc')
        ->paginate($perPage);
        return view('admin.banner.banner_list', compact('banners'  , 'perPage'));
    }

    public function add()
    {
        return view('admin.banner.add_banner');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'unique:banners,link',  
            // 'banner_image' => 'mimes:jpeg,jpg,png',
            'banner_image' => 'mimes:jpeg,jpg,png,gif,webp',  

        ]);

        if ($request->hasFile('banner_image')) {
            $banner = $request->file('banner_image');

            $bannerImage = Image::make($banner);
            if ($bannerImage->width() < 1020 || $bannerImage->height() < 496) {
                return back()->with(['error_message' => 'Banner image must be at least 1020x496 pixels.']);
            }

            $bannerImage->resize(1020, 496);
            $bannerPath = time() . '_banner.' . $banner->getClientOriginalExtension();
            $bannerImage->save(storage_path('app/public/images/banner_images/' . $bannerPath));
        } else {
            $bannerPath = null;
        }

        Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'banner_image' => $bannerPath,

        ]);

        return redirect()->route('admin.bannerList')->with('success_message', 'Banner created successfully!');
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'link' => 'unique:banners,link,' . $id,  
            'banner_image' => 'mimes:jpeg,jpg,png,gif,webp',  
        ]);
        

        $banner = Banner::find($id);

        if ($request->hasFile('banner_image')) {
            // Delete old banner image if exists
            $bannerImage = $request->file('banner_image');
            $image = Image::make($bannerImage);

            $width = $image->width();
            $height = $image->height();

            if ($width < 1020 || $height < 496) {
                return back()->with(['error_message' => 'Banner image must be at least 1020x496 pixels.']);
            }


            if ($banner->banner_image && file_exists(storage_path('app/public/images/banner_images/' . $banner->banner_image))) {
                unlink(storage_path('app/public/images/banner_images/' . $banner->banner_image));
            }

            $image->resize(1020, 496);
            $bannerImageName = time() . '_banner.' . $bannerImage->getClientOriginalExtension();
            $image->save(storage_path('app/public/images/banner_images/' . $bannerImageName));

            $banner->banner_image = $bannerImageName;
        }

        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->link = $request->link;
        $banner->save();

        return redirect()->route('admin.bannerList')->with('success_message', 'Banner Updated Successfully!');
    }


    public function delete(string $id)
    {

        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->route('admin.bannerList')->with('success_message', 'Banner Deleted Successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $banner = Banner::find($id);
        if ($banner->status == 1) {
            $banner->status = 0;
        } else {
            $banner->status = 1;
        }
        $banner->save();
    
        return redirect()->route('admin.bannerList')->with('success_message', 'Status updated successfully');
    }
    
}


