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
Route::get('date', function() { return date('d/m'); });

Route::get('A/', array('before' => 'cumpleanos:31/05', function() { return View::make('hola'); }));

Route::get('B/', array('before' => 'cumpleanos:foo,bar,baz', function() { return View::make('hola'); }));

Route::get('/', array('before' => 'ejemplo', function() { return View::make('hola'); }));