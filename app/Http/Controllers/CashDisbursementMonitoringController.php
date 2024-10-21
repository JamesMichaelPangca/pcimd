<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CashDisbursementMonitoring;
class CashDisbursementMonitoringController extends Controller
{
    public static function index(){
        $cashs= CashDisbursementMonitoring::get();
        return view('pages.cashDM.index')->with(['cashs' =>$cashs]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
        
        'inp_date' => 'required|date',
        'inp_d' => 'required|string|max:255',
        'inp_o' => 'required|string|max:255',
        'inp_particulars' => 'required|string|max:255',
        'inp_p' => 'required|string|max:255',
        'inp_payee' => 'required|string|max:255',
        'inp_ioe' => 'required|string|max:255',
        'inp_uc' => 'required|string|max:255',
        'inp_debit' => 'nullable|numeric|min:0|max:9999999.99',
        'inp_credit' => 'nullable|numeric|min:0|max:9999999.99',
        'inp_api' => 'required|string|max:255',
    ]);

    // Create a new record using the create method
    CashDisbursementMonitoring::create([
        'cdm_date' => $request->input('inp_date'),
        'cdm_dv_number' => $request->input('inp_d'),
        'cdm_ors_burs_number' => $request->input('inp_o'),
        'cdm_particulars' => $request->input('inp_particulars'),
        'cdm_po_payroll_number' => $request->input('inp_p'),
        'cdm_payee' => $request->input('inp_payee'),
        'cdm_item_of_expenditure' => $request->input('inp_ioe'),
        'cdm_uacs_code' => $request->input('inp_uc'),
        'cdm_debit' => $request->input('inp_debit') !== null ? $request->input('inp_debit') : null, // Ensure null if blank
        'cdm_credit' => $request->input('inp_credit') !== null ? $request->input('inp_credit') : null, // Ensure null if blank
        'cdm_api' => $request->input('inp_api'),
    ]);

   
    return redirect()->back()->with('success', 'Cash Disbursement Monitoring added successfully');
}
}
