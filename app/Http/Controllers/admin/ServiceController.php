<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search' , '');
        $services = Service::query() ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderby('id' , 'desc')->paginate($perPage);
        return view('admin.service.service_list', compact('services' , 'perPage'));
    }

  

    public function add()
    {
        return view('admin.service.add_service');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'unique:services,link',  
        ]);

        $metaTags = json_decode($request->meta_tags, true);

        Service::create([
            'name' => $request->name,
            'title' => $request->title,
            'link' => $request->link,
            'html_content' => $request->html_content,
            'meta_tags' => json_encode($metaTags),

        ]);

        // Step 3: Redirect to the blog list page with a success message
        return redirect()->route('admin.serviceList')->with('success_message', 'Service created successfully!');
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'link' => 'unique:services,link,' . $id,  
        ]);

        $service = Service::find($id);
        $metaTags = json_decode($request->meta_tags, true);

        $service->name = $request->name;
        $service->title = $request->title;
        $service->link = $request->link;
        $service->html_content = $request->html_content;
        $service->meta_tags = json_encode($metaTags);

        $service->save();
        return redirect()->route('admin.serviceList')->with('success_message', 'Service Updated successfully!');
    }


    public function delete(string $id){
 
        $service = Service::find($id);
        $service->delete();
    
        return redirect()->route('admin.serviceList')->with('success_message' , 'Service Deleted Successfully!');
    
    }
}
