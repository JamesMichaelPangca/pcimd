<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;
class AssetsController extends Controller
{
    public static function index(){
        $assets= Assets::get();
        return view('miscellaneous.assets')->with(['assets' =>$assets]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
           'inp_ca' => 'required|string|in:Cash and Cash Equivalents,Investments,Receivables,Inventories',  
         'inp_tca' => 'required|numeric|min:0', 
         'inp_nca' => 'required|string|in:Receivables,Advance to Contractors,Investment,Investment Properties,Property Plant Equipment,Biological Assets,Intangible Assets',  // Corrected for multiple values
         'inp_tna' => 'required|numeric|min:0', 
]);

    // Create a new builder
    Assets ::create([
        'as_ca' => $request->input('inp_ca'),
        'as_tca' => $request->input('inp_tca'),
        'as_nca' => $request->input('inp_nca'),
        'as_tna' => $request->input('inp_tna'),
       

    ]);

   
    return redirect()->back()->with('success', 'Assets added successfully');
}
}
