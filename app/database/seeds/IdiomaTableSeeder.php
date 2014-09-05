<?php

class IdiomaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('idioma')->truncate();

		$idiomas = [
			['lingua' => 'pt'],
			['lingua' => 'en'],
			['lingua' => 'es']
		];

		DB::table('idioma')->insert($idiomas);
	}

}