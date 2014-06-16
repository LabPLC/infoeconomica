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
Route::get('estudios', array('as'=>'estudios','uses'=>'HomeController@estudios'));
Route::get('infografias', array('as'=>'infografias','uses'=>'InfografiasController@index_home'));
Route::get('infografias/{id}', array('uses'=>'InfografiasController@show'))->where('id','[0-9]+');
Route::get('acerca-de', array('as'=>'about','uses'=>'HomeController@about'));
Route::get('logout', function(){
    return Redirect::to('/');
});


/*
	Seccion adminsitrativa
*/

//inicio
Route::get('control', function(){
    return View::make('control.dashboard');
});

//### Almacen de Indicadores ### 
Route::get('control/almacen', array('as'=>'control','uses'=>'IndicadorController@index'));
Route::get('control/almacen/nuevo', array('uses'=>'IndicadorController@create'));
Route::get('control/almacen/{clave}', 'IndicadorController@show')->where('clave', '[A-Za-z0-9\_]+');
Route::post('control/almacen', array('uses'=>'IndicadorController@store'));

//### Estadisticas
Route::get('control/estadisticas',function(){
    return View::make('control.estadisticas');
});
Route::get('control/estudios', function(){
    return View::make('control.estudios');
});

//## infografias
Route::get('control/infografias', array('uses'=>'InfografiasController@index'));
Route::get('control/infografias/nuevo', array('uses'=>'InfografiasController@create'));
Route::post('control/infografias', array('uses'=>'InfografiasController@store'));
Route::delete('control/infografias/{id}', array('uses'=>'InfografiasController@destroy'))->where('id','[0-9]+');


// formulario de nuevo indicador
Route::get('control/nuevo', function(){
    return View::make('nuevo');
});


Route::post('control/add_muestra', 'IndicadorController@insert_muestra');

//eliminar un indicador
Route::post('control/delete', 'IndicadorController@eliminar');

//eliminar una muestra
Route::post('control/muestra_delete', 'IndicadorController@eliminar_muestra');

//descarga CSV
Route::get('descarga/{clave}.csv', 'IndicadorController@descarga')->where('clave', '[A-Za-z0-9\_]+');