<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docentes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('departamento_id');
			$table->integer('rut')->unique('docentes_rut_key');
			$table->string('nombres');
			$table->string('apellidos');
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
		Schema::drop('docentes');
	}

}
