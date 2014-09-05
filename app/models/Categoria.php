<?php

class Categoria extends Eloquent{
	public $timestamps = false;
	protected $table = 'categoria';

	public function traducoes(){
		return $this->hasmany('TraducaoCategoria');
	}
}