<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_journal_entries', function (Blueprint $table) {
            $table->id('jp_id');
            $table->string('jp_accounts_explanation'); 
            $table->string('jp_uacs_object_code'); 
            $table->decimal('jp_amount', 10, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_journal_entries');
    }
};
