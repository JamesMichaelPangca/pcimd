<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashDisbursementMonitoring extends Model
{
    use HasFactory;
    use HasFactory;protected $table = 't_cash_disbursement_monitoring';
    protected $fillable = [
        'cdm_date',
        'cdm_dv_number',
        'cdm_ors_burs_number',
        'cdm_particulars',
        'cdm_po_payroll_number',
        'cdm_payee',
        'cdm_item_of_expenditure',
        'cdm_uacs_code',
        'cdm_debit',
        'cdm_credit',
        'cdm_api',
       ];
}