<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->route('dashboard'); // Redirect to the intended page
        }

        // If authentication fails
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    
}
