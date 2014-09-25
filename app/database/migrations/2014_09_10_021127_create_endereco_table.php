<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('anunciante_id')->unsigned();
			$table->integer('plano_id')->unsigned();
			$table->string('logradouro');
			$table->integer('numero');
			$table->string('complemento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco');
	}

}
