<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_date', 10);
            //$table->string('customer_id', 10);
            $table->string('order_status', 10);
            $table->integer('total_products', 11);
            $table->integer('sub_total', 11);
            $table->integer('var', 11);
            $table->integer('total', 11);
            $table->integer('pay', 11);
            $table->string('invoice_no', 10);
            $table->string('payment_type', 10);
            $table->integer('due', 11);
            $table->timestamps();

            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
