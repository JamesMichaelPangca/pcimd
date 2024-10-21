<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revenue;

class RevenueController extends Controller
{
    public static function index(){
        $revenue= Revenue::get();
        return view('miscellaneous.revenue')->with(['revenue' =>$revenue]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        'inp_revenue' => 'required|string|in:Tax Income,Share from Internal Revenue Collections,Other Share From National Taxes,Service and Business Income,Shares Grants and Donations,Gains,Other Income',
        'inp_tr' => 'required|numeric|min:0', // For revenue, decimal numbers should be allowed
     
]);

    // Create a new builder
    Revenue ::create([
            'rv_info' => $request->input('inp_revenue'),
            'rv_tr' => $request->input('inp_tr'),
    
            

    ]);

   
    return redirect()->back()->with('success', 'Revenue added successfully');
}
}


