<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Header;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search' , '');
        $feedbacks = Feedback::query()
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })
        ->paginate($perPage);
        $headers = Header::get();

        return view('admin.feedback.feedback_list', compact('feedbacks', 'headers' , 'perPage'));
    }
  

    public function add()
    {
        $headers = Header::get();
        return view('admin.feedback.add_feedback', compact('headers'));
    }

    public function store(Request $request)
    {


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
            'page' => $request->pageSelect,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.feedbackList')->with('success_message', 'Feedback created successfully!');
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        $feedback->title = $request->title;
        $feedback->description = $request->description;
        $feedback->page = $request->pageSelect;

        $feedback->save();
        return redirect()->route('admin.feedbackList')->with('success_message', 'Feedback Updated successfully!');
    }


    public function delete(string $id){
 
        $feedback = Feedback::find($id);
        $feedback->delete();
    
        return redirect()->route('admin.feedbackList')->with('success_message' , 'Feedback Deleted Successfully!');
    
    }
}
