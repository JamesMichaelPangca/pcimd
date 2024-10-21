<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalEntries extends Model
{
    use HasFactory;
    protected $table = 't_journal_entries';
     protected $fillable = [
            'jp_accounts_explanation',
            'jp_uacs_object_code',
            'jp_amount',
        ];
}
