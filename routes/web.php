<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instrucciones', function () {
    return view('instructions');
});

Route::get('/acerca-de', function () {
    return view('credits');


//---------------------------------------------------------------




Auth::routes();

//METODOS A LLAMAR PARA LAS FUNCIONES DE CARGA DE VISTAS
Route::get('/home', 'HomeController@index');
Route::get('/seleccionar/proyecto/{id}', 'HomeController@selectProject');
//-------------------------------------------------------------------