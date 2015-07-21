<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->foreign('campus_id', 'salas_campus_id_fkey')->references('id')->on('campus')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tipo_sala_id', 'salas_tipo_sala_id_fkey')->references('id')->on('tipos_salas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->dropForeign('salas_campus_id_fkey');
			$table->dropForeign('salas_tipo_sala_id_fkey');
		});
	}

}
