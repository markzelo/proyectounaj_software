<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/reportar', 'HomeController@report');

//metodod desde la pagina de routes
//damos acceso diferente como admini
//name space para los 3 cotroladores
Route::group(['middleware' => 'admin',"namespace"=>"Admin"], function () {

	Route::get('/usuarios', 'UserController@index');
	Route::get('/trabajos', 'TrabajosController@index');
	Route::get('/config', 'ConfigController@index');
    
});

