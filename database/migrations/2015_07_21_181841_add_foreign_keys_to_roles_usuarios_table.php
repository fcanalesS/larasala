<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->foreign('rol_id', 'roles_usuarios_rol_id_fkey')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('roles_usuarios_rol_id_fkey');
		});
	}

}
