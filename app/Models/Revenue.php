<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory; 
     use HasFactory;protected $table = 't_revenue';
    protected $fillable = [
           'rv_info',
           'rv_tr',

       ];
}
