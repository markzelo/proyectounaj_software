<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('description');
            //$table->string('name');
           
            $table->string('severity',1);
            $table->string('organization');
           

            $table->boolean('active')->default(1);//estado por defecto


            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('project_id')->unsigned()->nullable();//objeto con valores
            $table->foreign('project_id')->references('id')->on('projects');


            $table->integer('level_id')->unsigned()->nullable();
            $table->foreign('level_id')->references('id')->on('levels');




            //tabla usuarios distintos cliente y tecnico

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');

            $table->integer('support_id')->unsigned()->nullable();
            $table->foreign('support_id')->references('id')->on('users');






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
        Schema::dropIfExists('incidents');
    }
}
