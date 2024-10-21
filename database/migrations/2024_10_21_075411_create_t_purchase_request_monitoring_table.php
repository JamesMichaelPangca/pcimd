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
        Schema::create('t_purchase_request_monitoring', function (Blueprint $table) {
            $table->id('prm_id');
            $table->date('prm_date');
            $table->decimal('prm_pne', 10, 2); 
            $table->string('prm_du'); 
            $table->string('prm_idw'); 
            $table->string('prm_ida'); 
            $table->string('prm_ac'); 
            $table->decimal('prm_qtya', 10, 2); 
            $table->decimal('prm_ucb', 10, 2); 
            $table->decimal('prm_tc', 10, 2); 
            $table->string('prm_pn'); 
            $table->string('prm_idb');
            $table->decimal('prm_qty', 10, 2); 
            $table->string('prm_unit'); 
            $table->decimal('prm_uc', 10, 2); 
            $table->decimal('prm_tcb', 10, 2); 
            $table->string('prm_supplier'); 
            $table->string('prm_b_number'); 
            $table->string('prm_status');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_purchase_request_monitoring');
    }
};
