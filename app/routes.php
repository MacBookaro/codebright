<?php

/*
|--------------------------------------------------------------------------
| Programador: Francisco Naranjo - MacBookaro
| Fecha: 2014/05/31 07:38 p.m.
|
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() { return View::make('hello'); });

Route::get('/', array('before' => 'navidad|cumpleanos', function() { return View::make('hola'); }));