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
        $headers = Header::paginate($perPage);
        $totalHeaders = Header::count();
        return view('admin.header.header_list' , compact('headers' , 'totalHeaders' , 'perPage'));
    }

  
    public function addEditHeader(Request $request)
    {
        return view('admin.header.add_edit_header');
    }

    public function store(Request $request)
    {
      
        $header = Header::create([
            'title' => $request->title,
            'link' => $request->link,
        ]);
    
        return redirect()->route('header-list')->with('success_message', 'Header saved successfully!');
    }

    public function delete(string $id){
 
        $header = Header::find($id);
        $header->delete();
    
        return redirect()->route('header-list')->with('success_message' , 'Header Deleted Successfully!');
    
    }

    public function update(Request $request , $id){

        $header = Header::find($id);
        $header->title = $request->title;
        $header->link = $request->link;
        $header->save();

        return redirect()->route('header-list')->with('success_message' , 'Header Updated Successfully!');
    }
    
    
}   
