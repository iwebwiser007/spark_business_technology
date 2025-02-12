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
        // Default value for perPage
        $perPage = $request->get('perPage', 10);  // Default is 10 if no value is provided
    
        // Fetch paginated data
        $technologies = Technology::paginate($perPage);
    
        $totalTechnologies = Technology::count();  // Get the total count of records
    
        return view('admin.technology.technology_list', compact('technologies', 'totalTechnologies', 'perPage'));
    }
    

    public function addEditTechnology()
    {
        return view('admin.technology.add_edit_technology');
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

        return redirect()->route('technology-list')->with('success_message', 'Technology created successfully!');
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
        return redirect()->route('technology-list')->with('success_message' , 'Technology Updated Successfully!');
    }

    
public function delete(string $id){
 
    $technology = Technology::find($id);
    $technology->delete();

    return redirect()->route('technology-list')->with('success_message' , 'Technology Deleted Successfully!');

}
    
}
