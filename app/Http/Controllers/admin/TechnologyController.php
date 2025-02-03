<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        return view('admin.technology.technology_list');
    }

    public function addEditTechnology()
    {
        return view('admin.technology.add_edit_technology');
    }
}
