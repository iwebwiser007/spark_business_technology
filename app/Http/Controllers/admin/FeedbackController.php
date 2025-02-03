<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback.feedback_list');
    }

    public function addEditFeedback()
    {
        return view('admin.feedback.add_edit_feedback');
    }
}
