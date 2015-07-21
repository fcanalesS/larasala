<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horarios', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->date('fecha')->default('now()');
			$table->bigInteger('sala_id');
			$table->integer('periodo_id');
			$table->bigInteger('curso_id');
			$table->timestamps();
			$table->unique(['fecha','sala_id','periodo_id'], 'horarios_fecha_sala_id_periodo_id_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horarios');
	}

}
