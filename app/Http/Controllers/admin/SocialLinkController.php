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
        $socialLinks = SocialLink::paginate(100);
        return view('admin.social_link.social_link_list', compact('socialLinks'));
    }

    public function add()
    {
        return view('admin.social_link.add_social_link');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('social_icon')) {
            $socialIcon = $request->file('social_icon');
            $iconName = time() . '_' . $socialIcon->getClientOriginalName(); // Unique name
            $socialIcon->storeAs('public/social_icons', $iconName);
            $socialIconPath =  $iconName;  // Relative path (accessible from public)
        } else {
            $socialIconPath = null;  // Default image path if no file is uploaded
        }
        SocialLink::create([
            'icon' => $socialIconPath,  // Store the relative path in the database
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.socialLinkList')->with('success_message', 'Social-Link created successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'slug' => 'unique:social_links,slug,' . $id,  
        ]);
        

        $socialLink = SocialLink::find($id);
        $socialLink->slug = $request->slug;

        $socialLink->save();
        return redirect()->route('admin.socialLinkList')->with('success_message', 'Social-Link Updated successfully!');
    }


    public function delete(string $id){
 
        $socialLink = SocialLink::find($id);
        $socialLink->delete();
    
        return redirect()->route('admin.socialLinkList')->with('success_message' , 'Social-Link Deleted Successfully!');
    
    }

    public function statusUpdate(Request $request , $id){

        $socialLink = SocialLink::find($id);
       if( $socialLink->status == 0){
        $socialLink->status = 1;
       }else{
        $socialLink->status = 0;
       }
       $socialLink->save();
       return redirect()->route('admin.socialLinkList')->with('success_message', 'Social-Link Status updated successfully');

    }
}
