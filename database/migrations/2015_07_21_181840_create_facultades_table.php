<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacultadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facultades', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre')->unique('facultades_nombre_key');
			$table->integer('campus_id');
			$table->text('descripcion')->nullable();
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
		Schema::drop('facultades');
	}

}
