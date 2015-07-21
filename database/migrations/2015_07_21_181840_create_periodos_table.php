<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodos', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('numero')->unique('periodos_numero_key');
			$table->string('bloque')->unique('periodos_bloque_key');
			$table->time('inicio');
			$table->time('fin');
			$table->timestamps();
			$table->unique(['inicio','fin'], 'periodos_inicio_fin_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('periodos');
	}

}
