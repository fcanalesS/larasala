<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('asignatura_id');
			$table->integer('docente_id');
			$table->integer('semestre');
			$table->integer('anio');
			$table->integer('seccion');
			$table->timestamps();
			$table->unique(['asignatura_id','docente_id','semestre','anio','seccion'], 'cursos_asignatura_id_docente_id_semestre_anio_seccion_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursos');
	}

}
