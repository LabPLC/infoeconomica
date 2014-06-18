<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadisticasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estadisticas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('indicador_id');
			$table->integer('nombre');
			$table->integer('descripcion');
			$table->integer('categoria_id');
			$table->text('fuente');
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
		Schema::drop('estadisticas');
	}

}
