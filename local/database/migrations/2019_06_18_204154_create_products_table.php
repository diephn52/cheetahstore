<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->bigInteger('id_sub_category')->unsigned();
            $table->foreign('id_sub_category')->references('id')->on('sub_category')->onDelete('cascade');
            $table->bigInteger('unit_price');
            $table->bigInteger('promotion_price');
            $table->string('image');
            $table->string('color');
            $table->string('size');
            $table->string('SKU',100);
            $table->string('material',100);
            $table->string('gender',10);
            $table->enum('isNew', [1, 0]);
            $table->enum('isSale', [1, 0]);
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
        Schema::dropIfExists('products');
    }
}
