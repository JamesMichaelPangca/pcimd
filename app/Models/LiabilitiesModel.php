<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiabilitiesModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 't_liabilities';
     protected $fillable = [
            'as_cl',
            'as_tcl',
            'as_ncas',
            'as_tl',
        ];

}
