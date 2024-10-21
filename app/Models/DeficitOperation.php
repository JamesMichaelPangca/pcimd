<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeficitOperation extends Model
{

    use HasFactory;  
    use HasFactory;protected $table = 't_deficit_operation';
    protected $fillable = [
           'rv_sfco',
           'rv_sftp',
       ];
}
