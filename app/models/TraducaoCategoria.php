<?php

class TraducaoCategoria extends Eloquent{
	public $timestamps = false;
	protected $table = "traducao_categoria";

	public function categoria(){
		return $this->belongsTo('Categoria');
	}

	public function idioma(){
		return $this->belongsTo('Idioma');
	}
}