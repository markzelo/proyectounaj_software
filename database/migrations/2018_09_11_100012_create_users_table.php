<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            
            // el rol 0 para el administrador el 1 para tecnicos y el 3 para clientes
            $table->smallInteger("role")->default(2);//usuarios  por defecto que se crean

            //fk a proyectos para seleccion de proyectos por parte de usuarios
            $table->integer('selected_project_id')->unsigned()->nullable();
            $table->foreign('selected_project_id')->references('id')->on('projects');
            

            //guardar datos sobre el inicio de sesion
            $table->rememberToken();
            $table->softDeletes();

        //fechas de creacion 
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
        Schema::drop('users');
    }
}
