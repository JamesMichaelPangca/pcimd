<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrasactionLog extends Model
{
    use HasFactory;

    protected $table = 't_trasaction_log';
    protected $fillable = [
        'tl_date',
        'tl_document_type',
        'tl_particulars',
        'tl_api_code',
        'tl_requestor',
        'tl_quarter',
        'tl_item_of_exp',
        'tl_allotment_class',
        'tl_requested_amount',
        'tl_remarks',
    ];
}
