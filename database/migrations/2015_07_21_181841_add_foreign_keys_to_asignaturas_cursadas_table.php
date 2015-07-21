<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAsignaturasCursadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('asignaturas_cursadas', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'asignaturas_cursadas_curso_id_fkey')->references('id')->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('estudiante_id', 'asignaturas_cursadas_estudiante_id_fkey')->references('id')->on('estudiantes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asignaturas_cursadas', function(Blueprint $table)
		{
			$table->dropForeign('asignaturas_cursadas_curso_id_fkey');
			$table->dropForeign('asignaturas_cursadas_estudiante_id_fkey');
		});
	}

}
