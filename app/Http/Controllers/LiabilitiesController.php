<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiabilitiesModel;

class LiabilitiesController extends Controller
{

    public static function index(){
        $liabilities= LiabilitiesModel::get();
        return view('miscellaneous.liabilities')->with(['liabilities' =>$liabilities]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
      'inp_cl' => 'required|string|in:Financial Liabilities,Inter-Agency Payables,Intra-Agency Payables,Trust Liabilities,Other Liabilities',
        'inp_tcl' => 'required|numeric|min:0',
        'inp_ncas' => 'required|string|in:Financial Liabilities,Inter-Agency Payables,Intra-Agency Payables,Trust Liabilities,Deferred Credit /Unearned Income,Provisions,Other Payables',
        'inp_tl' => 'required|numeric|min:0',
    ]);

    // Create a new builder
    LiabilitiesModel ::create([
         
        'as_cl' => $request->input('inp_cl'),
        'as_tcl' => $request->input('inp_tcl'),
        'as_ncas' => $request->input('inp_ncas'),
        'as_tl' => $request->input('inp_tl'),
            

    ]);

   
    return redirect()->back()->with('success', 'Liabilities added successfully');
}
}



