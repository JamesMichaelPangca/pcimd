<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrialBalanceEntries extends Model
{
    use HasFactory;
    protected $table = 't_trial_balance_entries';
    
    protected $fillable = [
           'tbe_account',
           'tbe_code',
       ];
}
