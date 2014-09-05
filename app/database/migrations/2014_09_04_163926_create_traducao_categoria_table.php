<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraducaoCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traducao_categoria', function(Blueprint $table)
		{
		    $table->integer('categoria_id')->unsigned();
		    $table->integer('idioma_id')->unsigned();
		    $table->string('nome');
		    $table->primary(array('categoria_id', 'idioma_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('traducao_categoria');
	}

}
