<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Heading;
use App\Models\SubHeading;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('admin.header.header_list');
    }


    public function addEditHeader(Request $request)
    {
        return view('admin.header.add_edit_header');
    }

    public function store(Request $request)
    {
        return $request;
        // Validation for the header title/link and sub-header title/link
        $validated = $request->validate([
            // Header Title and Link
            'header_title' => 'required|string|max:255',
            'header_link' => 'required|url|max:255',
    
            // Sub-header title and link (optional fields)
            'sub_headers.*.title' => 'required|string|max:255',  // Validate all sub-header titles
            'sub_headers.*.link' => 'required|url|max:255',  // Validate all sub-header links
        ]);
    
        // Once validation passes, you can process the data
        // For header
        $header = Heading::create([
            'title' => $validated['header_title'],
            'link' => $validated['header_link'],
        ]);
    
        // If sub-headers are provided
        if (isset($validated['sub_headers'])) {
            foreach ($validated['sub_headers'] as $subHeader) {
                SubHeading::create([
                    'heading_id' => $header->id,
                    'title' => $subHeader['title'],
                    'link' => $subHeader['link'],
                ]);
            }
        }
    
        // Return a success message or redirect
        return redirect()->route('admin.header.index')->with('success_message', 'Header saved successfully!');
    }
    
    
}   
