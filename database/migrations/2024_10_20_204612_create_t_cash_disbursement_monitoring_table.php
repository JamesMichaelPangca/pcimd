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
        Schema::create('t_cash_disbursement_monitoring', function (Blueprint $table) {
            $table->id('cdm_id');
            $table->date('cdm_date');
            $table->string('cdm_dv_number')->nullable(); 
            $table->string('cdm_ors_burs_number')->nullable();
            $table->text('cdm_particulars'); 
            $table->string('cdm_po_payroll_number')->nullable(); 
            $table->string('cdm_payee'); 
            $table->string('cdm_item_of_expenditure');
            $table->string('cdm_uacs_code'); 
            $table->decimal('cdm_debit', 10, 2)->nullable(); 
            $table->decimal('cdm_credit', 10, 2)->nullable();
            $table->string('cdm_api');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_cash_disbursement_monitoring');
    }
};
