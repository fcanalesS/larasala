<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('docentes', function(Blueprint $table)
		{
			$table->foreign('departamento_id', 'docentes_departamento_id_fkey')->references('id')->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('docentes', function(Blueprint $table)
		{
			$table->dropForeign('docentes_departamento_id_fkey');
		});
	}

}
