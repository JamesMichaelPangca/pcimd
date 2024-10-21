<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequestMonitoring extends Model
{
    use HasFactory;

    protected $table = 't_purchase_request_monitoring';
    protected $fillable = [
           
           'prm_date',
           'prm_pne',
           'prm_du',
           'prm_idw',
           'prm_ida',
           'prm_ac',
           'prm_qtya',
           'prm_ucb',
           'prm_tc',
           'prm_pn',
           'prm_idb',
           'prm_qty',
           'prm_unit',
           'prm_uc',
           'prm_tcb',
           'prm_supplier',
           'prm_b_number',
           'prm_status',

       ];
}