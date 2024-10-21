<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory; 
    protected $table = 't_assets';
    protected $fillable = [
           'as_ca',
           'as_tca',
           'as_nca',
           'as_tna',
            
       ];
}

