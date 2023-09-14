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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->date('order_date');
            $table->string('client_name');
            $table->string('phone_number', 11);
            $table->string('sub_total');
            $table->string('vat');
            $table->string('total_amount');
            $table->string('discount');
            $table->string('grand_total');
            $table->string('paid');
            $table->string('due');
            $table->integer('payment_type');
            $table->integer('payment_status');
            $table->integer('order_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
