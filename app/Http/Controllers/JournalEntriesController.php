<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JournalEntries;

class JournalEntriesController extends Controller

{
    public static function index(){
        $journals= JournalEntries::get();
        return view('pages.journals.index')->with(['journals' =>$journals]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        'inp_aae' => 'required|string|max:255',
        'inp_uoc' => 'required|string|max:255',
        'inp_amount' => 'required|string|max:25',
    ]);

    // Create a new builder
    JournalEntries ::create([
        'jp_accounts_explanation' => $request->input('inp_aae'),
        'jp_uacs_object_code' => $request->input('inp_uoc'),
        'jp_amount' => $request->input('inp_amount'),
    ]);

   
    return redirect()->back()->with('success', 'Journal added successfully');
}
}
