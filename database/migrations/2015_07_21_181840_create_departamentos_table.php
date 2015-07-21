<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departamentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre');
			$table->integer('facultad_id');
			$table->text('descripcion')->nullable();
			$table->timestamps();
			$table->unique(['nombre','facultad_id'], 'departamentos_nombre_facultad_id_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departamentos');
	}

}
