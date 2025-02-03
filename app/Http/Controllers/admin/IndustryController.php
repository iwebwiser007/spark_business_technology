<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        return view('admin.industry.industry_list');
    }

    public function addEditIndustry()
    {
        return view('admin.industry.add_edit_industry');
    }
}
