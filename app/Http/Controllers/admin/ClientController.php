<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ClientController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $clients = Client::paginate($perPage);
        return view('admin.clients.clients_list' , compact('clients' , 'perPage'));
    }

  

    public function addEditClient()
    {
        return view('admin.clients.add_edit_client');
    }

    public function store(Request $request){

        if ($request->hasFile('upload_logo')) {
            $logo = $request->file('upload_logo');

            $logoImage = Image::make($logo);
            $logoPath = time() . '_.' . $logo->getClientOriginalExtension();
            $logoImage->save(storage_path('app/public/client_logos/' . $logoPath));
        } else {
            $logoPath = null;
        }

        Client::create([
            'title' => $request->title,
            'logo' => $logoPath,

        ]);

        return redirect()->route('client-list')->with('success_message', 'Client created successfully!');
    }


    public function update(Request $request , $id){
        $client = Client::find($id);

        
        if ($request->hasFile('logo')) {
            // Delete the old image if it exists
            if ($client->logo && file_exists(storage_path('app/public/client_logos/' . $client->logo))) {
                unlink(storage_path('app/public/client_logos/' . $client->logo));
            }
    
            // Get the uploaded image
            $clientImage = $request->file('logo');
            
            // Use getClientOriginalExtension to get the extension
            $extension = $clientImage->getClientOriginalExtension();
            
            // Create a new name for the image with the current timestamp
            $clientImageName = time() . '_' . $client->id . '.' . $extension;
    
            // Resize and save the image
            $image = Image::make($clientImage);
            $image->save(storage_path('app/public/client_logos/' . $clientImageName));
    
            // Update the image field in the database
            $client->logo = $clientImageName;
        }
        $client->title = $request->title;
        $client->save();
        return redirect()->route('client-list')->with('success_message' , 'Client Updated Successfully!');
    }

    
    public function delete(string $id){
 
        $client = Client::find($id);
        $client->delete();
    
        return redirect()->route('client-list')->with('success_message' , 'Client Deleted Successfully!');
    
    }
}
