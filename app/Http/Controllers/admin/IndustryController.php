<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class IndustryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search' , '');
        $industries = Industry::query()->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->paginate($perPage);
        return view('admin.industry.industry_list', compact('industries' , 'perPage'));
    }

    public function add()
    {
        return view('admin.industry.add_industry');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('upload_img')) {
            $industryImg = $request->file('upload_img');
            $imgName = time() . '_' . $industryImg->getClientOriginalName(); // Unique name
            $industryImg->storeAs('public/industry', $imgName);
            $industryImgPath =  $imgName;  // Relative path (accessible from public)
        } else {
            $industryImgPath = null;  // Default image path if no file is uploaded
        }
        Industry::create([
            'title' => $request->title,
            'description' => $request->description,
            'service' => $request->service,
            'slug' => $request->slug,
            'image' => $industryImgPath,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.industryList')->with('success_message', 'Industry created successfully!');
    }

    public function update(Request $request, $id)
    {
        $industry = Industry::find($id);
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($industry->image && file_exists(storage_path('app/public/industry/' . $industry->image))) {
                unlink(storage_path('app/public/industry/' . $industry->image));
            }

            // Get the uploaded image
            $industryImage = $request->file('image');

            // Use getClientOriginalExtension to get the extension
            $extension = $industryImage->getClientOriginalExtension();

            // Create a new name for the image with the current timestamp
            $industryImageName = time() . '_' . $industry->id . '.' . $extension;

            // Resize and save the image
            $image = Image::make($industryImage);
            $image->save(storage_path('app/public/industry/' . $industryImageName));

            // Update the image field in the database
            $industry->image = $industryImageName;
        }
        $industry->title = $request->title;
        $industry->description = $request->description;
        $industry->service = $request->service;
        $industry->slug = $request->slug;
        $industry->save();
        return redirect()->route('admin.industryList')->with('success_message', 'Industry Updated successfully!');
    }

    public function delete(string $id)
    {
        $industry = Industry::find($id);
        $industry->delete();
        return redirect()->route('admin.industryList')->with('success_message', 'Industry Deleted successfully!');
    }
}
