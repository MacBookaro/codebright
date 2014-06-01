<?php

/*
 |--------------------------------------------------------------------------
 | Programador: Francisco Naranjo - MacBookaro
 | Fecha: 2014/06/01 12:54 p.m.
 |
 | app/controllers/Articulo.php
 |--------------------------------------------------------------------------
 */

namespace Blog\Controller;

use View;
use BaseController;


class Articulo extends BaseController {

	public function getCrear()
	{
		return View::make('crear');
	}

	public function postCrear()
	{
		// Gestionar el formulario de creación
	}

}
