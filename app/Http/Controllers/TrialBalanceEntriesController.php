<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrialBalanceEntries;

class TrialBalanceEntriesController extends Controller
{
    public static function index(){
        $trialBalance= TrialBalanceEntries::get();
        return view('miscellaneous.trialBalance')->with(['trialBalance' =>$trialBalance]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        'inp_at' => 'required|string|max:255',
        'inp_ac' => 'required|string|max:25',
    ]);

    // Create a new builder
    TrialBalanceEntries ::create([
        'tbe_account' => $request->input('inp_at'),
        'tbe_code' => $request->input('inp_ac'),

    ]);

   
    return redirect()->back()->with('success', 'Trial Balance added successfully');
}
}
