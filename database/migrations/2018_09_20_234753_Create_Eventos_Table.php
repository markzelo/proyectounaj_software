<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha');
            $table->string('lugar');
            $table->mediumText('descripcion');
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::drop('eventos');
    }
}
