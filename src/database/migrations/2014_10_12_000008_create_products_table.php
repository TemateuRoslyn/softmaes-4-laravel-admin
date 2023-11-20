<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('product_name')->unique();
        //$table->integer('category_id')->unsigned();
        $table->char('product_code', 5)->unique();
        $table->integer('buying_price')->unsigned();
        $table->integer('selling_price')->unsigned();
        $table->integer('stock')->unsigned();
        //$table->char('unit_id');
        $table->string('product_image')->nullable();
        $table->timestamps();

        //$table->foreign('category_id')->constrained()->onDelete('cascade');
        //$table->foreign('unit_id')->constrained()->onDelete('cascade');
    });
}
public function down()
{
    Schema::dropIfExists('products');
}
};
