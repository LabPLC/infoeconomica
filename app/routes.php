<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//home del micrositio
Route::get('/', array('as'=>'inicio','uses'=>'HomeController@index'));
Route::get('estudios', array('as'=>'estudios','uses'=>'EstudiosController@index_home'));
Route::get('infografias', array('as'=>'infografias','uses'=>'InfografiasController@index_home'));
Route::get('infografias/{id}', array('uses'=>'InfografiasController@show'))->where('id','[0-9]+');
Route::get('acerca-de', array('as'=>'about','uses'=>'HomeController@about'));

//descarga CSV
Route::get('descarga/{clave}.csv', 'IndicadorController@descarga')->where('clave', '[A-Za-z0-9\_]+');


/*
	Seccion adminsitrativa
*/
/*
Route::get('makeuser', function(){
    
    $nuevo = new User;
    $nuevo->username = 'admin';
    $nuevo->password = Hash::make('admin');
    $nuevo->save();

    return 'done';

});*/

//#rutas para autentificar usuarios
Route::get('control/login', 'HomeController@login_form');
Route::post('control/login', 'HomeController@login');
Route::get('control/logout', 'HomeController@logout');


//### rutas que necesitan autentificacion
Route::group(array('before' => 'auth'), function()
{

	//inicio
	Route::get('control', function(){
	    return View::make('control.dashboard');
	});

	//### Almacen de Indicadores ### 
	Route::get('control/almacen', array('as'=>'control','uses'=>'IndicadorController@index'));
	Route::post('control/almacen', array('uses'=>'IndicadorController@store'));
	Route::get('control/almacen/nuevo', array('uses'=>'IndicadorController@create'));
	Route::post('control/almacen/delete', 'IndicadorController@eliminar');
	Route::post('control/almacen/muestras', 'IndicadorController@insert_muestra');
	Route::get('control/almacen/{clave}', 'IndicadorController@show')->where('clave', '[A-Za-z0-9\_]+');
	

	//### Estadisticas
	Route::get('control/estadisticas',function(){
	    return View::make('control.estadisticas');
	});

	//## estudios
	Route::get('control/estudios', array('uses'=>'EstudiosController@index'));
	Route::get('control/estudios/nuevo', array('uses'=>'EstudiosController@create'));
	Route::post('control/estudios', array('uses'=>'EstudiosController@store'));
	Route::delete('control/estudios/{id}', array('uses'=>'EstudiosController@destroy'))->where('id','[0-9]+');

	//## infografias
	Route::get('control/infografias', array('uses'=>'InfografiasController@index'));
	Route::get('control/infografias/nuevo', array('uses'=>'InfografiasController@create'));
	Route::post('control/infografias', array('uses'=>'InfografiasController@store'));
	Route::delete('control/infografias/{id}', array('uses'=>'InfografiasController@destroy'))->where('id','[0-9]+');


	

	

	//eliminar una muestra
	Route::post('control/muestra_delete', 'IndicadorController@eliminar_muestra');

});
