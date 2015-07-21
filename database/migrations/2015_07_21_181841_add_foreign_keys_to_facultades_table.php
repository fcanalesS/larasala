<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacultadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facultades', function(Blueprint $table)
		{
			$table->foreign('campus_id', 'facultades_campus_id_fkey')->references('id')->on('campus')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facultades', function(Blueprint $table)
		{
			$table->dropForeign('facultades_campus_id_fkey');
		});
	}

}
