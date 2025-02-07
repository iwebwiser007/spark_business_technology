<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.service_list' , compact('services'));
    }

    public function addEditService()
    {
        return view('admin.service.add_edit_service');
    }

    public function store(Request $request)
    {
        // Step 1: Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            // 'description' => 'required|string',
            'link' => 'required|string|max:255',
            'html_content' => 'required',
        ]);

        // if ($request->hasFile('image')) {
        //     // Store the file in the 'public/images' directory and get the path
        //     $imagePath = $request->file('image')->store('public/images');
        //     // Generate the URL for the stored image
        //     $imageUrl = basename($imagePath);
        // } else {
        //     $imageUrl = null; // Fallback if no image is uploaded
        // }
    
       
    
       Service::create([
        'name' => $request->name,
        'title' => $request->title,
        // 'description' => $request->description,
        'link' => $request->link,
        'html_content' => $request->html_content,
        // 'image' => $imageUrl,

        
       ]);
    
        // Step 3: Redirect to the blog list page with a success message
        return redirect()->route('service-list')->with('success_message', 'Service created successfully!');
    }


    public function update(Request $request , $id){
        $service = Service::find($id);

        if ($request->image) {
            // Delete the old image if it exists
            if ($service->image && file_exists(storage_path('app/public/images/' . $service->image))) {
                unlink(storage_path('app/public/images/' . $service->image)); // Delete the old image
            }
    
            // Store the new image
            $imagePath = $request->image->store('public/images'); // Store it in storage/app/public/images
            
            // Update the image path in the database
            $service->image = basename($imagePath); // Store the filename (not the full path)
        }

        $service->name = $request->name;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->link = $request->link;
        $service->html_content = $request->html_content;
        $service->image = $service->image;

        $service->save();
        return redirect()->route('service-list')->with('success_message', 'Service Updated successfully!');

    }


    

  
}
