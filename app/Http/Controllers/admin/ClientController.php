<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.clients.clients_list');
    }

    public function addEditClient()
    {
        return view('admin.clients.add_edit_client');
    }
}
