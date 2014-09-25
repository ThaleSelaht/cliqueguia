<?php

class Anunciante extends Eloquent{
	protected $table = 'anunciante';

	public function enderecos(){
		return $this->hasMany('Endereco');
	}

	public function categorias(){
		return $this->belongsTo('Categoria'); 
	}
}