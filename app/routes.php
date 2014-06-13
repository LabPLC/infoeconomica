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
Route::get('infografias', array('as'=>'infografias','uses'=>'HomeController@infografias'));

/*
	Seccion adminsitrativa
*/

//inicio
Route::get('control', array('as'=>'control','uses'=>'IndicadorController@lista'));
// formulario de nuevo indicador
Route::get('control/nuevo', function(){
    return View::make('nuevo');
});

// manda llamar al insertador de indicadores
Route::post('control/add', array('uses'=>'IndicadorController@insert'));
Route::post('control/add_muestra', 'IndicadorController@insert_muestra');

//eliminar un indicador
Route::post('control/delete', 'IndicadorController@eliminar');

//eliminar una muestra
Route::post('control/muestra_delete', 'IndicadorController@eliminar_muestra');

// manda llamar al insertador de indicadores
Route::get('control/detalle/{clave}', 'IndicadorController@detalle')->where('clave', '[A-Za-z0-9\_]+');

//descarga CSV
Route::get('control/descarga/{clave}.csv', 'IndicadorController@descarga')->where('clave', '[A-Za-z0-9\_]+');