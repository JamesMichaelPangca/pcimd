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
        Schema::create('t_assets', function (Blueprint $table) {
            $table->id('as_id');
            $table->string('as_ca', 100)->default('');
            $table->decimal('as_tca', 10, 2)->default(0.00);
            $table->string('as_nca', 100)->default('');
            $table->decimal('as_tna', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assets');
    }
};
