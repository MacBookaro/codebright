<?php

/*
 |--------------------------------------------------------------------------
 | Programador: Francisco Naranjo - MacBookaro
 | Fecha: 2014/06/01 08:02 a.m.
 |
 | clase ArticuloController
 |--------------------------------------------------------------------------
 */

class ArticuloController extends BaseController {

	public function mostrarIndex()
	{
		return View::make('index');
	}

	public function mostrarUnico($idArticulo)
	{
		return View::make('unico');
	}

}
