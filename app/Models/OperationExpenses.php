<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationExpenses extends Model
{
    use HasFactory;  use HasFactory;protected $table = 't_operational_expenses';
    protected $fillable = [
           'rv_tlcoe',
           'rv_coe',

       ];
}
