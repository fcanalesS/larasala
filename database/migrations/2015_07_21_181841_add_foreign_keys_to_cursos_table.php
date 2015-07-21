<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursos', function(Blueprint $table)
		{
			$table->foreign('asignatura_id', 'cursos_asignatura_id_fkey')->references('id')->on('asignaturas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('docente_id', 'cursos_docente_id_fkey')->references('id')->on('docentes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursos', function(Blueprint $table)
		{
			$table->dropForeign('cursos_asignatura_id_fkey');
			$table->dropForeign('cursos_docente_id_fkey');
		});
	}

}
