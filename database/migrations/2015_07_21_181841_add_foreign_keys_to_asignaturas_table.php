<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('asignaturas', function(Blueprint $table)
		{
			$table->foreign('departamento_id', 'asignaturas_departamento_id_fkey')->references('id')->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asignaturas', function(Blueprint $table)
		{
			$table->dropForeign('asignaturas_departamento_id_fkey');
		});
	}

}
