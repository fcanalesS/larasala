<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscuelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escuelas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre');
			$table->integer('departamento_id');
			$table->text('descripcion')->nullable();
			$table->timestamps();
			$table->unique(['nombre','departamento_id'], 'escuelas_nombre_departamento_id_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('escuelas');
	}

}
