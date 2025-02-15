<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Technology;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{

    public function registration(Request $req)
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        return view('admin.login');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return view('admin.login');
        } else {
            $totalClients = Client::count();
            $totalTechnologies = Technology::count();
            $totalBranches = Branch::count();
            $totalServices = Service::count();
            $totalFeedbacks = Feedback::count();
            // return $totalClients;

            return view('admin.dashboard', compact('totalClients', 'totalTechnologies', 'totalBranches', 'totalServices', 'totalFeedbacks'));
        }
    }



    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        if ($request->isMethod('post')) {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($data)) {
                $id = Auth::user()->id;
                $request->session()->put('admin', $id);
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->with('error_message', 'Invalid email or password');
            }
        } else {
            if (Auth::check()) {
                return redirect()->route('dashboard');
            }
            return view('admin.login');
        }
    }


    public function logout()
    {

        session()->flush();
        Auth::logout();

        return redirect('/admin/login')->with('success_message', 'Successfully logged out');
    }


    public function profile()
    {
        $admin = Admin::get()->first();
        return view('admin.profile', compact('admin'));
    }

    public function editProfile(Request $request)
    {
        $admin = Admin::get()->first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->route('admin.profile')->with('success_messaage', 'Your profile has been successfully updated!');
    }

    public function editPassword(Request $request)
    {

        $password = Hash::make($request->password);
        $admin = Admin::get()->first();
        $admin->password = $password;
        $admin->save();
        return redirect()->route('admin.profile')->with('success_messaage', 'Your password has been successfully updated!');
    }

    public function forgetPassword()
    {
        return view('admin.forget_pass');
    }


    public function logo(){
        $logo = Logo::get()->first();
        return view('admin.settings.logo' , compact('logo'));
    }

    public function updateLogo(Request $request) {
        $logo = Logo::first(); // Assuming you are only dealing with one logo record
    
        // Check and process the admin logo
        if ($request->hasFile('admin_logo')) {
            $adminLogo = $request->file('admin_logo');
            $logoImage = Image::make($adminLogo);
            $adminLogoPath = time() . '_admin_logo.' . $adminLogo->getClientOriginalExtension();
            $logoImage->save(storage_path('app/public/logos/' . $adminLogoPath));
        } else {
            // Use the existing admin logo if no new logo is uploaded
            $adminLogoPath = $request->input('existing_admin_logo');
        }
    
        // Check and process the front logo
        if ($request->hasFile('front_logo')) {
            $frontLogo = $request->file('front_logo');
            $logoImage = Image::make($frontLogo);
            $frontLogoPath = time() . '_front_logo.' . $frontLogo->getClientOriginalExtension();
            $logoImage->save(storage_path('app/public/logos/' . $frontLogoPath));
        } else {
            // Use the existing front logo if no new front logo is uploaded
            $frontLogoPath = $request->input('existing_front_logo');
        }
    
        // Save the logo paths
        $logo->admin_logo = $adminLogoPath;
        $logo->front_logo = $frontLogoPath;
        $logo->save();
    
        return redirect()->back()->with('success_message', 'Logo Updated successfully!');
    }
    
}


