<?php

class Idioma extends Eloquent{
	public $timestamps = false;
	protected $table = 'idioma';

	public function traducaoCategoria(){
		return $this->hasMany('TraducaoCategoria');
	}

	/* Retorna a tradução de todas as categorias em um determinado idioma */ 
	public static function traduzCategoria($id){
		return Static::with('traducaoCategoria')->whereId($id)->get();
	}
}