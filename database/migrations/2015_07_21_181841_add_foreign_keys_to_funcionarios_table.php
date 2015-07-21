<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->foreign('departamento_id', 'funcionarios_departamento_id_fkey')->references('id')->on('departamentos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->dropForeign('funcionarios_departamento_id_fkey');
		});
	}

}
