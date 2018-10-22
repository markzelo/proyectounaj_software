<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // contiene carrito activos de cada usuario y pedidos de compra
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            // orden
            $table->date('order_date')->nullable();
            // atendido
            $table->date('arrived_date')->nullable();
            //activo - pendiente  -cancelado 
            $table->string('status');

            $table->integer('user_id')->unsigned();//referencia es la fk
            $table->foreign('user_id')->references('id')->on('users');
            

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
        Schema::dropIfExists('carts');
    }
}
