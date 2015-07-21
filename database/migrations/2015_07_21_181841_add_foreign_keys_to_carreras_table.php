<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carreras', function(Blueprint $table)
		{
			$table->foreign('escuela_id', 'carreras_escuela_id_fkey')->references('id')->on('escuelas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carreras', function(Blueprint $table)
		{
			$table->dropForeign('carreras_escuela_id_fkey');
		});
	}

}
