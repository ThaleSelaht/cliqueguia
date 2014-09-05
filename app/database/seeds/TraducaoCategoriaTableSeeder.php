<?php

class TraducaoCategoriaTableSeeder extends Seeder{
	public function run(){
		DB::table('traducao_categoria')->truncate();

		$traducoes = [
			//pt
			["categoria_id" => 1, "idioma_id" => 1, "nome" => "Automotivos"],
			["categoria_id" => 2, "idioma_id" => 1, "nome" => "Esportes & Fitness"],
			["categoria_id" => 3, "idioma_id" => 1, "nome" => "Gastronomia"],
			["categoria_id" => 4, "idioma_id" => 1, "nome" => "Hospedagem"],
			["categoria_id" => 5, "idioma_id" => 1, "nome" => "Informática & Eletrônicos"],
			["categoria_id" => 6, "idioma_id" => 1, "nome" => "Moda & Vestuário"],
			["categoria_id" => 7, "idioma_id" => 1, "nome" => "Saúde & Beleza"],
			//en
			["categoria_id" => 1, "idioma_id" => 2, "nome" => "Automotive"],
			["categoria_id" => 2, "idioma_id" => 2, "nome" => "Sport & Fitness"],
			["categoria_id" => 3, "idioma_id" => 2, "nome" => "Gastronomy"],
			["categoria_id" => 4, "idioma_id" => 2, "nome" => "Lodging"],
			["categoria_id" => 5, "idioma_id" => 2, "nome" => "Computer & Eletronic"],
			["categoria_id" => 6, "idioma_id" => 2, "nome" => "Fashion & Clothing"],
			["categoria_id" => 7, "idioma_id" => 2, "nome" => "Health & Beauty"]
			//es
		];

		DB::table('traducao_categoria')->insert($traducoes);
	}
}