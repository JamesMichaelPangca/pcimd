<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperationExpenses;

class OperationExpensesController extends Controller
{
    public static function index(){
        $operation= OperationExpenses::get();
        return view('miscellaneous.OperationExpenses')->with(['operation' =>$operation]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        'inp_lcoe' => 'required|string|in:Personal Service,Maintenance and Other Operating Expenses,Non-Cash Expenses,Financial Expenses',
        'inp_coe' => 'required|numeric|min:0', // Same, numeric to allow decimals
        
]);

    // Create a new builder
    OperationExpenses ::create([
            
            'rv_tlcoe' => $request->input('inp_lcoe'),
            'rv_coe' => $request->input('inp_coe'),
            

    ]);

   
    return redirect()->back()->with('success', 'Operation added successfully');
}
}


