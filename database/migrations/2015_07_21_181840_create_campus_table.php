<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre')->unique('campus_nombre_key');
			$table->string('direccion');
			$table->float('latitud', 10, 0);
			$table->float('longitud', 10, 0);
			$table->text('descripcion')->nullable();
			$table->integer('rut_encargado');
			$table->timestamps();
			$table->unique(['latitud','longitud'], 'campus_latitud_longitud_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campus');
	}

}
