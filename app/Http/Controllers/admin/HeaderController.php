<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Models\Heading;
use App\Models\SubHeading;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $headers = Header::query()
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderBy('id', 'desc')
        ->paginate($perPage);
        $totalHeaders = Header::count();
        return view('admin.header.header_list' , compact('headers' , 'totalHeaders' , 'perPage'));
    }

  
    public function add(Request $request)
    {
        return view('admin.header.add_header');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'unique:headings,link',  
        ]);

        $header = Header::create([
            'title' => $request->title,
            'link' => $request->link,
            // 'html_content' => $request->html_content,
        ]);
    
        return redirect()->route('admin.headerList')->with('success_message', 'Header saved successfully!');
    }

    public function delete(string $id){
 
        $header = Header::find($id);
        $header->delete();
    
        return redirect()->route('admin.headerList')->with('success_message' , 'Header Deleted Successfully!');
    
    }

    public function update(Request $request , $id){

        $validated = $request->validate([
            'link' => 'unique:headings,link,' . $id,  // Ignore the current record's link during validation
        ]);
        $header = Header::find($id);
        $header->title = $request->title;
        $header->link = $request->link;
        // $header->html_content = $request->html_content;

        $header->save();

        return redirect()->route('admin.headerList')->with('success_message' , 'Header Updated Successfully!');
    }
    
    
}   
