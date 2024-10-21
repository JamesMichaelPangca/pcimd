<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetUtilizationReport extends Model
{
    use HasFactory;

    protected $table = 't_budget_utilization_report';
    protected $fillable = [
        'bur_date',
        'bur_old_uacs',
        'bur_new_uacs',
        'bur_account_group',
        'bur_ref',
        'bur_particulars',
        'bur_amount',
        'bur_allotment_class',
        'bur_api',
       ];
}
