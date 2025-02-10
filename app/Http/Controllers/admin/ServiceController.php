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
        return view('admin.service.service_list', compact('services'));
    }

    public function addEditService()
    {
        return view('admin.service.add_edit_service');
    }

    public function store(Request $request)
    {

        $metaTags = json_decode($request->meta_tags, true);

        Service::create([
            'name' => $request->name,
            'title' => $request->title,
            'link' => $request->link,
            'html_content' => $request->html_content,
            'meta_tags' => json_encode($metaTags),

        ]);

        // Step 3: Redirect to the blog list page with a success message
        return redirect()->route('service-list')->with('success_message', 'Service created successfully!');
    }


    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $metaTags = json_decode($request->meta_tags, true);

        $service->name = $request->name;
        $service->title = $request->title;
        $service->link = $request->link;
        $service->html_content = $request->html_content;
        $service->meta_tags = json_encode($metaTags);

        $service->save();
        return redirect()->route('service-list')->with('success_message', 'Service Updated successfully!');
    }


    public function delete(string $id){
 
        $service = Service::find($id);
        $service->delete();
    
        return redirect()->route('service-list')->with('success_message' , 'Service Deleted Successfully!');
    
    }
}
