<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->increments('id');



            $table->integer('cart_id')->unsigned();//referencia es la fk
            $table->foreign('cart_id')->references('id')->on('carts');

            $table->integer('product_id')->unsigned();//referencia es la fk
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantily');
            $table->integer('discount')->default(0);






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
        Schema::dropIfExists('cart_details');
    }
}
