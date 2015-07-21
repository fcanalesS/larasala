<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departamentos', function(Blueprint $table)
		{
			$table->foreign('facultad_id', 'departamentos_facultad_id_fkey')->references('id')->on('facultades')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departamentos', function(Blueprint $table)
		{
			$table->dropForeign('departamentos_facultad_id_fkey');
		});
	}

}
