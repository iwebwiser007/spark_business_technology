<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Header;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::get();
        return view('admin.feedback.feedback_list' , compact('feedbacks'));
    }

    public function addEditFeedback()
    {
        $headers = Header::get();
        return view('admin.feedback.add_edit_feedback' , compact('headers'));
    }

    public function store(Request $request){

        $page = Header::find($request->pageSelect);

        if ($request->hasFile('upload_logo')) {
            $feekbackIcon = $request->file('upload_logo');
            $iconName = time() . '_' . $feekbackIcon->getClientOriginalName(); // Unique name
            $feekbackIcon->storeAs('public/feedbacks', $iconName);
            $feekbackIconPath =  $iconName;  // Relative path (accessible from public)
        } else {
            $feekbackIconPath = null;  // Default image path if no file is uploaded
        }
        Feedback::create([
            'image' => $feekbackIconPath,  // Store the relative path in the database
            'title' => $request->title,
            'description' => $request->description,
            'page' => $page->title,
        ]);

        // Redirect with a success message
        return redirect()->route('feedback-list')->with('success_message', 'Feedback created successfully!');
        
    }
}
