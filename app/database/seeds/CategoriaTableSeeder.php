<?php

class CategoriaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categoria')->truncate();

		Categoria::create(array());
		Categoria::create(array());
		Categoria::create(array());
		Categoria::create(array());
		Categoria::create(array());
		Categoria::create(array());
		Categoria::create(array());
		
	}

}