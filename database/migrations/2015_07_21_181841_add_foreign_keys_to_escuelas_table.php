<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEscuelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('escuelas', function(Blueprint $table)
		{
			$table->foreign('departamento_id', 'escuelas_departamento_id_fkey')->references('id')->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('escuelas', function(Blueprint $table)
		{
			$table->dropForeign('escuelas_departamento_id_fkey');
		});
	}

}
