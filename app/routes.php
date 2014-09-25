<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	/*Categoria::find(1)->traducoes()
					  ->where("traducao_categoria.idioma_id", "=", "2")
					  ->with('idioma')
					  ->get();*/
	$categoria = 
	Categoria::find(1)->traducoes()
					  ->where("idioma_id", "=", "1")
					  ->with('idioma')
					  ->get();
	
	return $categoria;
});

Route::get('/teste', function()
{
	return View::make('teste');
});

Route::get('/anunciante', function()
{
	return View::make('anunciante');
});

