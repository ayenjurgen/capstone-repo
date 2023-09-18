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
        Schema::create('quantity_history', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('old_quantity');
            $table->string('date_time');
            $table->string('operation');
            $table->integer('new_quantity');
            $table->integer('inputed_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quantity_history');
    }
};
