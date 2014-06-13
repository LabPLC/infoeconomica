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

// muestra una lista de indicadores en el home
Route::get('/', 'IndicadorController@lista');

// muestra una lista de indicadores en el home
Route::get('nuevo', function(){
    return View::make('nuevo');
});

// manda llamar al insertador de indicadores
Route::post('add', array('uses'=>'IndicadorController@insert'));
Route::post('add_muestra', 'IndicadorController@insert_muestra');

//eliminar un indicador
Route::post('delete', 'IndicadorController@eliminar');

//eliminar una muestra
Route::post('muestra_delete', 'IndicadorController@eliminar_muestra');

// manda llamar al insertador de indicadores
Route::get('detalle/{clave}', 'IndicadorController@detalle')->where('clave', '[A-Za-z0-9\_]+');

//descarga CSV
Route::get('descarga/{clave}.csv', 'IndicadorController@descarga')->where('clave', '[A-Za-z0-9\_]+');

Route::get('endpoint-pruebas',function() {
  Log::info('*** se hizo un pinche request ***: '.Input::get("pollo",'nada'));
  return "ok";
});