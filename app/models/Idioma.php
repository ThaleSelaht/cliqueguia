<?php

class Idioma extends Eloquent{
	public $timestamps = false;
	protected $table = 'idioma';

	public function traducaoCategoria(){
		return $this->hasMany('TraducaoCategoria');
	}

	public static function traduzCategoria($id){
		return Static::with('traducaoCategoria')->whereId($id)->get();
	}
}