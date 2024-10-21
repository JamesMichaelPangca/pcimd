<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeficitOperation;

class DeficitOperationController extends Controller
{
    public static function index(){
        $decifit= DeficitOperation::get();
        return view('miscellaneous.deficitOperation')->with(['decifit' =>$decifit]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        
        'inp_sfco' => 'required|string|in:Add(Deduct),Transfers Assistance and Subsidy From,Transfers Assistance and Subsidy To',
         'inp_sftp' => 'required|numeric|min:0', // Same, numeric to allow decimals
]);

    // Create a new builder
    DeficitOperation ::create([
           
            'rv_sfco' => $request->input('inp_sfco'),
            'rv_sftp' => $request->input('inp_sftp'),

    ]);

   
    return redirect()->back()->with('success', 'Decifit added successfully');
}
}