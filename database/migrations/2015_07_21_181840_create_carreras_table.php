<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carreras', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('escuela_id');
			$table->integer('codigo')->unique('carreras_codigo_key');
			$table->string('nombre');
			$table->text('descripcion')->nullable();
			$table->timestamps();
			$table->unique(['codigo','nombre'], 'carreras_codigo_nombre_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carreras');
	}

}
