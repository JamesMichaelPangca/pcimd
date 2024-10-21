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
        Schema::create('t_trasaction_log', function (Blueprint $table) {
            $table->id('tl_id');
            $table->date('tl_date'); 
            $table->string('tl_document_type', 255)->nullable();
            $table->text('tl_particulars'); 
            $table->string('tl_api_code', 100)->nullable();
            $table->string('tl_requestor', 255); 
            $table->string('tl_quarter', 50); 
            $table->string('tl_item_of_exp', 255);  
            $table->string('tl_allotment_class', 100); 
            $table->decimal('tl_requested_amount', 15, 2);  
            $table->text('tl_remarks')->nullable(); 
            $table->timestamps();
        });
        
    }
     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_trasaction_log');
    }
};
