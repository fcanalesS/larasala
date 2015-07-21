<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			$table->foreign('carrera_id', 'estudiantes_carrera_id_fkey')->references('id')->on('carreras')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			$table->dropForeign('estudiantes_carrera_id_fkey');
		});
	}

}
