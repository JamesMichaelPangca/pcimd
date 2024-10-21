<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrasactionLog;

class TransactionLogController extends Controller
{
    public static function index(){
        $transactions= TrasactionLog::get();
        return view('pages.transactions.index')->with(['transactions' =>$transactions]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
            'inp_date' => 'required|date',
            'inp_dt' => 'required|string|max:255',  
            'inp_p' => 'required|string',  
            'inp_ac' => 'nullable|string|max:100',  
            'inp_requestor' => 'required|string|max:255',  
            'inp_quarter' => 'required|string|max:50', 
            'inp_ioe' => 'required|string|max:255',  
            'inp_alc' => 'required|string|max:100', 
            'inp_ra' => 'required|numeric|min:0', 
            'inp_remarks' => 'nullable|string', 
    ]);

    // Create a new builder
    TrasactionLog ::create([
            'tl_date' => $request->input('inp_date'),
            'tl_document_type' => $request->input('inp_dt'),
            'tl_particulars' => $request->input('inp_p'),
            'tl_api_code' => $request->input('inp_ac'),
            'tl_requestor' => $request->input('inp_requestor'),
            'tl_quarter' => $request->input('inp_quarter'),
            'tl_item_of_exp' => $request->input('inp_ioe'),
            'tl_allotment_class' => $request->input('inp_alc'),
            'tl_requested_amount' => $request->input('inp_ra'),
            'tl_remarks' => $request->input('inp_remarks'),

    ]);

   
    return redirect()->back()->with('success', 'Transaction Log added successfully');
}
}
