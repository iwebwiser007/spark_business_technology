<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        return view('admin.case.case_list');
    }

    public function addEditCaseStudy()
    {
        return view('admin.case.add_edit_case');
    }
}
