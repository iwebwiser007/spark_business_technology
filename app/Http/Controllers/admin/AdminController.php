<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

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
            return view('admin.dashboard');
        }
    }

    public function index()
    {
        // Check if the user is already logged in
        if (Auth::check()) {
            // If the user is already logged in, redirect to the dashboard
            return redirect()->route('dashboard');
        }
    
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            // Collect login credentials
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];
    
            // Attempt to authenticate
            if (Auth::attempt($data)) {
                $id = Auth::user()->id;
                $request->session()->put('admin', $id);
    
                // If authenticated, redirect to dashboard
                return redirect()->route('dashboard');
            } else {
                // If authentication fails, show error message
                return redirect()->route('login')->with('error_message', 'Invalid email or password');
            }
        } else {
            // If already authenticated, redirect to dashboard
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


    public function profile(){
        $admin = Admin::get()->first();
        return view('admin.profile' , compact('admin'));
    }

    public function editProfile(Request $request){
        $admin = Admin::get()->first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->route('admin.profile')->with('success_messaage' , 'Your profile has been successfully updated!');


    }

    public function editPassword(Request $request){

        $password = Hash::make($request->password);
        $admin = Admin::get()->first();
        $admin->password = $password;
        $admin->save();
        return redirect()->route('admin.profile')->with('success_messaage' , 'Your password has been successfully updated!');

        

    }

    public function forgetPassword(){
        return view('admin.forget_pass');
    }
}




