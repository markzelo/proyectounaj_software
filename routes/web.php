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

// Route::get('/instrucciones', function () {
//     return view('instructions');
// });

Route::get('/acerca-de', function () {
    return view('guest/credits');
});

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
Route::get('/listas', 'GalleryController@index');


Route::get('/products/{id}/', 'SaleProductController@show');
Route::get('/cart', 'CartDetailController@store');


Route::get('/admin/products', 'ProductController@index');//listado
//-----------------------------------------------------------------------------------

Route::get('/admin/products/create', 'ProductController@create');//registrar
Route::post('/admin/products', 'ProductController@store');//guardar
Route::get('/admin/products/{id}/edit', 'ProductController@edit');//edicion
Route::post('/admin/products/{id}/edit', 'ProductController@update');//actualizar
Route::delete('/admin/products/{id}', 'ProductController@destroy');//actualizar


Route::get('/admin/products/{id}/images', 'ImageController@index');//listas de imagenes por producto
Route::post('/admin/products/{id}/images', 'ImageController@store');//guardar
Route::delete('/admin/products/{id}/images', 'ImageController@destroy');//actualizar







//mensajeria chat store registra nuevos msjs
Route::post('/mensajes', 'MessageController@store');

//reportes en pdf
Route::get('/reportes', 'PdfController@index');
Route::get('/crear_reporte_porusuario/{tipo}', 'PdfController@crear_reporte_porusuario');

Route::get('/PdfDemo', ['as'=>'PdfDemo','uses'=>'PdfDemoController@index']);
Route::get('/sample-pdf', ['as'=>'SamplePDF','uses'=>'PdfDemoController@samplePDF']);
Route::get('/save-pdf', ['as'=>'SavePDF','uses'=>'PdfDemoController@savePDF']);
Route::get('/download-pdf', ['as'=>'DownloadPDF','uses'=>'PdfDemoController@downloadPDF']);
Route::get('/html-to-pdf', ['as'=>'HtmlToPDF','uses'=>'PdfDemoController@htmlToPDF']);


//graficas
Route::get('/charts', 'ChartController@index')->name('chart.index');
Route::get('/pie', 'ChartController@index');
Route::get('/line', 'ChartController@index_line');
Route::get('/bar', 'ChartController@index_bar');
Route::get('/area', 'ChartController@index_area');


//eventos--------------------------------------------------------------
//Eventos Calendario
Route::get('/gcalendar', 'EventController@index');
Route::post('/events', 'EventController@addEvent')->name('events.add');



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
	Route::get('/usuario/{id}/eliminar', 'UserController@delete');


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
     Route::post('/categoria/{id}/eliminar', 'CategoryController@delete');

    //niveles-------------------------------------------------------------
    Route::post('/niveles', 'LevelController@store');
    Route::post('/nivel/editar', 'LevelController@update');
    Route::post('/nivel/{id}/eliminar', 'LevelController@delete');

    // Project-User-------------------------------------------
    Route::post('/proyecto-usuario', 'ProjectUserController@store');
    Route::post('/proyecto-usuario/{id}/eliminar', 'ProjectUserController@delete');




	Route::get('/config', 'ConfigController@index');
    
});

Route::group(['middleware' => 'guest',"namespace"=>"Guest"], function () {
    Route::get('/instrucciones', 'InstructionController@index');
});