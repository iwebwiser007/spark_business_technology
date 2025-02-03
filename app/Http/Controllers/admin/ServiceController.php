<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.service_list');
    }

    public function addEditService()
    {
        return view('admin.service.add_edit_service');
    }
}
