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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('phone', 15);
            $table->string('address',100);
            $table->string('shopname',50);
            $table->string('type',15);
            $table->string('bank_name',50);
            $table->string('account_holder', 50);
            $table->string('account_number', 50);
            $table->string('photo',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
