<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunicipalityBudget extends Model
{
    use HasFactory;

    protected $table = 't_municipality_budget'; // Define the table name

    protected $primaryKey = 'mb_id'; // Set primary key

    protected $fillable = [
        'mb_year',
        'mb_amount',
        'mb_supporting_documents',
    ];

    protected $casts = [
        'mb_supporting_documents' => 'array', // Cast the JSON field as an array
    ];
}
