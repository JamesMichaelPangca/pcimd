<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetUtilizationReport;


class BudgetUtilizationReportController extends Controller
{

public static function index(){
    $budgets= BudgetUtilizationReport::get();
    return view('pages.budgetUR.index')->with(['budgets' =>$budgets]);
}
public function store(Request $request)
{
// Validate the request data
$request->validate([
    'inp_date' => 'required|string|max:255',
    'inp_ou' => 'required|string|max:255',
    'inp_nu' => 'required|string|max:50',
    'inp_ag' => 'required|string|max:255',
    'inp_ref' => 'required|string|max:25',
    'inp_particulars' => 'required|string|max:255',
    'inp_amount' =>'required|numeric|min:0',
    'inp_ac' => 'required|string|max:255',
    'inp_api' => 'required|string|max:255',
]);

// Create a new builder
BudgetUtilizationReport ::create([
    'bur_date' => $request->input('inp_date'),
    'bur_old_uacs' => $request->input('inp_ou'),
    'bur_new_uacs' => $request->input('inp_nu'),
    'bur_account_group' => $request->input('inp_ag'),
    'bur_ref' => $request->input('inp_ref'),
    'bur_particulars' => $request->input('inp_particulars'),
    'bur_amount' => $request->input('inp_amount'),
    'bur_allotment_class' => $request->input('inp_ac'),
    'bur_api' => $request->input('inp_api'),
   
]);


return redirect()->back()->with('success', 'Budget Utilization Report added successfully');
}
}