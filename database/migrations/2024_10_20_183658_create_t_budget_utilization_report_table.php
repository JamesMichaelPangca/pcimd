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
        Schema::create('t_budget_utilization_report', function (Blueprint $table) {
            $table->id('bur_id');
            $table->date('bur_date'); 
            $table->string('bur_old_uacs');
            $table->string('bur_new_uacs'); 
            $table->string('bur_account_group'); 
            $table->string('bur_ref'); 
            $table->text('bur_particulars'); 
            $table->decimal('bur_amount', 10, 2)->default(0.00);
            $table->string('bur_allotment_class');
            $table->string('bur_api'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_budget_utilization_report');
    }
};
