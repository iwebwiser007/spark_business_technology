<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($link)
    {
        // Find the service by the link
        $service = Service::where('link', $link)->firstOrFail();
    
        // Replace 'asset()' with the correct relative path and remove the blade curly braces
        $service->html_content = str_replace('asset(\'public', 'public', $service->html_content);
        $service->html_content = str_replace('asset("public', 'public', $service->html_content);
    
        // Remove Blade curly braces
        $service->html_content = str_replace('{{', '', $service->html_content);
        $service->html_content = str_replace('\')}}', '', $service->html_content);

    
        // Return the view with the updated service data
        return view('front.service.show', compact('service'));
    }
    
    
    
        
}
