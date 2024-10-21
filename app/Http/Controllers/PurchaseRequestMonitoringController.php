<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseRequestMonitoring;

class PurchaseRequestMonitoringController extends Controller
{
    public static function index(){
        $purchase= PurchaseRequestMonitoring::get();
        return view('pages.purchaseRM.index')->with(['purchase' =>$purchase]);
    }
    public function store(Request $request)
    {
    // Validate the request data
    $request->validate([
       
        'inp_dp' =>'required|string|max:255',
        'inp_pn' =>'required|numeric|min:0',
        'inp_du' => 'required|string|max:255',
        'inp_id' => 'required|string|max:255',
        'inp_ac' => 'required|string|max:255',
        'inp_qty' => 'required|numeric|min:0',
        'inp_unit' => 'required|numeric|min:0',
        'inp_uc' => 'required|numeric|min:0',
        'inp_tc' => 'required|numeric|min:0',
        'inp_po' => 'required|string|max:255',
        'inp_item_desc' =>  'required|string|max:255',
        'inp_qtye' =>'required|numeric|min:0',
        'inp_unite' => 'required|numeric|min:0',
        'inp_uce' => 'required|numeric|min:0',
        'inp_tce' => 'required|numeric|min:0',
        'inp_supplier' => 'required|string|max:255',
        'inp_bwe' => 'required|string|max:25',
        'inp_status' => 'required|string|max:255',
        
]);

    // Create a new builder
    PurchaseRequestMonitoring ::create([
            
       
        'prm_date'=> $request->input('inp_dp'),
        'prm_pne'=> $request->input('inp_pn'),
        'prm_du'=> $request->input('inp_du'),
        'prm_idw'=> $request->input('inp_id'),
        'prm_ida'=> $request->input('inp_ac'),
        'prm_ac'=> $request->input('inp_qty'),
        'prm_qtya'=> $request->input('inp_unit'),
        'prm_ucb'=> $request->input('inp_uc'),
        'prm_tc'=> $request->input('inp_tc'),
        'prm_pn'=> $request->input('inp_po'),
        'prm_idb'=> $request->input('inp_item_desc'),
        'prm_qty'=> $request->input('inp_qtye'),
        'prm_unit'=> $request->input('inp_unite'),
        'prm_uc'=> $request->input('inp_uce'),
        'prm_tcb'=> $request->input('inp_tce'),
        'prm_supplier'=> $request->input('inp_supplier'),
        'prm_b_number'=> $request->input('inp_bwe'),
        'prm_status'=> $request->input('inp_status'),

    ]);

   
    return redirect()->back()->with('success', 'Purchase Request Monitoring added successfully');
}
}


