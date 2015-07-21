<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_usuarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('rut');
			$table->integer('rol_id');
			$table->timestamps();
			$table->unique(['rut','rol_id'], 'roles_usuarios_rut_rol_id_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles_usuarios');
	}

}
