<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::get();
        return view('admin.social_link.social_link_list' , compact('socialLinks'));
    }

    public function add(){
        return view('admin.social_link.add_social_link');
    }


    public function store(Request $request)
{
    if ($request->hasFile('social_icon')) {
        $socialIcon = $request->file('social_icon');
        $iconName = time() . '_social_icon.' . $socialIcon->getClientOriginalExtension();
        $socialIcon->storeAs('public/social_icons', $iconName);  // Save the file
        $socialIconPath = 'social_icons/' . $iconName;  // Store relative path for future use
    } else {
        $socialIconPath = null;  // If no file is uploaded, set the icon as null (or you can use a default image)
    }

    // Insert the data into the database
    SocialLink::create([
        'icon' => $socialIconPath,  
        'title' => $request->title,
        'slug' => $request->slug,
    ]);

    return redirect()->route('social-link-list')->with('success_message', 'Social-Link created successfully!');
}


    
}
