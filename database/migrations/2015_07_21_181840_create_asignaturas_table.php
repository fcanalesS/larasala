<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('departamento_id');
			$table->string('codigo')->unique('asignaturas_codigo_key');
			$table->string('nombre');
			$table->text('descripcion')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignaturas');
	}

}
