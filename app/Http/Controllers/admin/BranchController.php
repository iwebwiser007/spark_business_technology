<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        return view('admin.branch.branch_list');
    }

    public function addEditBranch()
    {
        return view('admin.branch.add_edit_branch');
    }
}
