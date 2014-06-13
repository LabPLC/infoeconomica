<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndicadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indicadores', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('clave');
            $table->text('nombre');
            $table->text('descripcion');
            $table->integer('frecuencia_muestreo');
			//$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('indicadores');
	}

}
