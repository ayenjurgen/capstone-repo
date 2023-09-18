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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->bigInteger('card_num');
            $table->string('card_exp_month', 2);
            $table->string('card_exp_year', 5);
            $table->string('paid_amount', 10);
            $table->string('paid_amount_currency', 10);
            $table->string('txn_id,', 50);
            $table->string('payment_status', 25);
            $table->dateTime('created');
            $table->dateTime('modified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
