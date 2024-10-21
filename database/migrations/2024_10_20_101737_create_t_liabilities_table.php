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
        Schema::create('t_liabilities', function (Blueprint $table) {
            $table->id('lt_id');
            $table->string('as_cl', 100)->default('');
            $table->decimal('as_tcl', 10, 2)->default(0.00);
            $table->string('as_ncas', 100)->default('');
            $table->decimal('as_tl', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_liabilities');
    }
};
