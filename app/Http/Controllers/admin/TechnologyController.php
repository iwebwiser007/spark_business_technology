<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class TechnologyController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);  
        $search = $request->get('search' , '');
        $technologies = Technology::query() ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->paginate($perPage);
        $totalTechnologies = Technology::count();  
    
        return view('admin.technology.technology_list', compact('technologies', 'totalTechnologies', 'perPage'));
    }
    

    public function add()
    {
        return view('admin.technology.add_technology');
    }

    public function store(Request $request){

        if ($request->hasFile('upload_logo')) {
            $logo = $request->file('upload_logo');

            $logoImage = Image::make($logo);
            $logoPath = time() . '_.' . $logo->getClientOriginalExtension();
            $logoImage->save(storage_path('app/public/technology_logos/' . $logoPath));
        } else {
            $logoPath = null;
        }

        Technology::create([
            'title' => $request->title,
            'image' => $logoPath,

        ]);

        return redirect()->route('admin.technologyList')->with('success_message', 'Technology created successfully!');
    }


    public function update(Request $request , $id)
    {
        $technology = Technology::find($id);
        
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($technology->image && file_exists(storage_path('app/public/technology_logos/' . $technology->image))) {
                unlink(storage_path('app/public/technology_logos/' . $technology->image));
            }
    
            // Get the uploaded image
            $technologyImage = $request->file('image');
            
            // Use getClientOriginalExtension to get the extension
            $extension = $technologyImage->getClientOriginalExtension();
            
            // Create a new name for the image with the current timestamp
            $technologyImageName = time() . '_' . $technology->id . '.' . $extension;
    
            // Resize and save the image
            $image = Image::make($technologyImage);
            $image->save(storage_path('app/public/technology_logos/' . $technologyImageName));
    
            // Update the image field in the database
            $technology->image = $technologyImageName;
        }
    
        // Update the other fields
        $technology->title = $request->title;
    
        // Save the updated model
        $technology->save();
    
        // Redirect with a success message
        return redirect()->route('admin.technologyList')->with('success_message' , 'Technology Updated Successfully!');
    }

    
public function delete(string $id){
 
    $technology = Technology::find($id);
    $technology->delete();

    return redirect()->route('admin.technologyList')->with('success_message' , 'Technology Deleted Successfully!');

}
    
}
