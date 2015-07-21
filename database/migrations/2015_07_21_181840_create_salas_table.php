<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salas', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('campus_id');
			$table->integer('tipo_sala_id');
			$table->string('nombre');
			$table->text('descripcion')->nullable();
			$table->timestamps();
			$table->unique(['tipo_sala_id','nombre'], 'salas_tipo_sala_id_nombre_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('salas');
	}

}
