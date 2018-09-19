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


//
// Incident

Route::get('/reportar', 'IncidentController@create');//devuelve la vista
Route::post('/reportar', 'IncidentController@store');//guardado
//pasar parametros con id
Route::get('/incidencia/{id}/editar', 'IncidentController@edit');
Route::post('/incidencia/{id}/editar', 'IncidentController@update');

//ver incidencia especifica
Route::get('/ver/{id}', 'IncidentController@show');
Route::get('/ver', 'IncidentController@reportes');

// ver tods las inicidencias Route::get('/ver', 'IncidentController@');

Route::get('/incidencia/{id}/atender', 'IncidentController@take');
Route::get('/incidencia/{id}/resolver', 'IncidentController@solve');
Route::get('/incidencia/{id}/abrir', 'IncidentController@open');
Route::get('/incidencia/{id}/derivar', 'IncidentController@nextLevel');


//ver productos
Route::get('/productos', 'ProductController@solutions');

//mensajeria chat store registra nuevos msjs
Route::post('/mensajes', 'MessageController@store');

//reportes en pdf
Route::get('/reportes', 'PdfController@index');
Route::get('/crear_reporte_porusuario/{tipo}', 'PdfController@crear_reporte_porusuario');




//metodod desde la pagina de routes
//damos acceso diferente como admini
//name space para los 3 cotroladores
//----------permisos de admin
Route::group(['middleware' => 'auth',"namespace"=>"Admin"], function () {

	 // derechos sobre usuarios----------------------------------
    Route::get('/usuarios', 'UserController@index');
    Route::post('/usuarios', 'UserController@store');
    
    Route::get('/usuario/{id}', 'UserController@edit');
    Route::post('/usuario/{id}', 'UserController@update');
	
	//registrar-----------------------------------------------
	Route::post('/usuario/{id}/eliminar', 'UserController@delete');


	Route::get('/proyectos', 'ProjectController@index');
	Route::post('/proyectos', 'ProjectController@store');
	
    
    Route::get('/proyecto/{id}', 'ProjectController@edit');
    Route::post('/proyecto/{id}', 'ProjectController@update');

    //admin los edita--------------------------------------------------------
    Route::get('/proyecto/{id}/eliminar', 'ProjectController@delete');
    Route::get('/proyecto/{id}/restaurar', 'ProjectController@restore');
    

   //categorias--------------------------------------------------------
    Route::post('/categorias', 'CategoryController@store');
     Route::post('/categoria/editar', 'CategoryController@update');
     Route::get('/categoria/{id}/eliminar', 'CategoryController@delete');

    //niveles-------------------------------------------------------------
    Route::post('/niveles', 'LevelController@store');
    Route::post('/nivel/editar', 'LevelController@update');
    Route::get('/nivel/{id}/eliminar', 'LevelController@delete');

    // Project-User-------------------------------------------
    Route::post('/proyecto-usuario', 'ProjectUserController@store');
    Route::get('/proyecto-usuario/{id}/eliminar', 'ProjectUserController@delete');




	Route::get('/config', 'ConfigController@index');
    
});