<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
     public static function index(){
        $department= Department::get();
        return view('miscellaneous.departments')->with(['department' =>$department]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        'inp_department' => 'required|string|in:BSIT,MET,ESM,TCM,REGISTRAR,ACCREDITATION,EXTENSION COMMUNITY RELATIONS,LIBRARY,RESEARCH,CENTER OF INNOVATIVE TEACHING AND LEARNING,CENTER FOR ENTREPRENEURSHIP AND TECHNOLOGY'
    // Removed trailing comma and added proper formatting
]);

    // Create a new builder
    Department ::create([
            'dp_na' => $request->input('inp_department'),
    
            

    ]);

   
    return redirect()->back()->with('success', 'Department added successfully');
}
}