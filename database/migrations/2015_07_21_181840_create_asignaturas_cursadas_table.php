<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasCursadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas_cursadas', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('curso_id');
			$table->bigInteger('estudiante_id');
			$table->timestamps();
			$table->unique(['curso_id','estudiante_id'], 'asignaturas_cursadas_curso_id_estudiante_id_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignaturas_cursadas');
	}

}
