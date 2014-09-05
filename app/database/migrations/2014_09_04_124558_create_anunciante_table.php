<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuncianteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anunciante', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->integer('categoria_id')->unsigned();
		    $table->integer('plano_id')->unsigned()->nullable();
		    $table->string('nome');
		    $table->string('site')->nullable();
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
		Schema::drop('anunciante');
	}

}
