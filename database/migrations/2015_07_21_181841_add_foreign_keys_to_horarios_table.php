<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('horarios', function(Blueprint $table)
		{
			$table->foreign('sala_id', 'horarios_sala_id_fkey')->references('id')->on('salas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('periodo_id', 'horarios_periodo_id_fkey')->references('id')->on('periodos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('curso_id', 'horarios_curso_id_fkey')->references('id')->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('horarios', function(Blueprint $table)
		{
			$table->dropForeign('horarios_sala_id_fkey');
			$table->dropForeign('horarios_periodo_id_fkey');
			$table->dropForeign('horarios_curso_id_fkey');
		});
	}

}
