<?php

class Endereco extends Eloquent{
	public $timestamps = false;
	protected $table = 'endereco';

	public function anunciantes(){
		return $this->belongsTo('Anunciante');
	}
}