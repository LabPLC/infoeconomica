<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMuestrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('muestras', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_indicador');
            $table->integer('anio');
            $table->integer('mes');
            $table->integer('dia');
            $table->decimal('valor');
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
		Schema::drop('muestras');
	}

}
