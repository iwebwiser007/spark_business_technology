<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search' , '');
        $certificates = Certificate::query() ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->paginate($perPage);
        return view('admin.certificate.certificate_list' , compact('certificates' , 'perPage'));
    }

    public function add()
    {
        return view('admin.certificate.add_certificate');
    }


    public function store(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $certificateImage = Image::make($image);
            $imagePath = time() . '_.' . $image->getClientOriginalExtension();
            $certificateImage->save(storage_path('app/public/certificates/' . $imagePath));
        } else {
            $imagePath = null;
        }

        Certificate::create([
            'title' => $request->title,
            'image' => $imagePath,

        ]);

        return redirect()->route('admin.certificateList')->with('success_message', 'Certificate created successfully!');
    }

    public function update(Request $request , $id){
        $certificate = Certificate::find($id);
        $certificate->title = $request->title;
        $certificate->save();
        return redirect()->route('admin.certificateList')->with('success_message' , 'Certificate Updated Successfully!');
    }

    
    public function delete(string $id){
 
        $certificate = Certificate::find($id);
        $certificate->delete();
    
        return redirect()->route('admin.certificateList')->with('success_message' , 'Certificate Deleted Successfully!');
    
    }
}

