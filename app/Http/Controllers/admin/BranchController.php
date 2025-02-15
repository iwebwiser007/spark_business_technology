<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Country;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search' , '');
        $branches = Branch::query() ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->paginate($perPage);
        $countries = Country::all();
        return view('admin.branch.branch_list' , compact('branches' , 'perPage' , 'countries'));
    }

    public function add()
    {
        $countries = Country::all();
        return view('admin.branch.add_branch' , compact('countries'));
    }

    public function store(Request $request){

        Branch::create([
            'title' => $request->title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'page' => $request->pageSelect,
        ]);

        return redirect()->route('admin.branchList')->with('success_message' , 'Branch Created Successfully!');

    }

    public function update(Request $request , $id){
       $branch = Branch::find($id);
       $branch->title = $request->title;
       $branch->address = $request->address;
       $branch->city = $request->city;
       $branch->state = $request->state;
       $branch->zip_code = $request->zip_code;
       $branch->country = $request->country;
       $branch->page = $request->pageSelect;
       $branch->save();
       return redirect()->route('admin.branchList')->with('success_message', 'Branch Updated Successfully!');
    }

    public function delete(string $id){
        $branch = Branch::find($id);
        $branch->delete();
        return redirect()->route('admin.branchList')->with('success_message', 'Branch Deleted Successfully!');


    }
}
