<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        return view('admin.certificate.certificate_list');
    }

    public function addEditCertificate()
    {
        return view('admin.certificate.add_edit_certificate');
    }
}
