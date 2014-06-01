<?php

/*
 |--------------------------------------------------------------------------
 | Programador: Francisco Naranjo - MacBookaro
 | Fecha: 2014/05/31 07:38 p.m.
 |
 | Application Routes
 |--------------------------------------------------------------------------
 */

Route::get('0/', function() { return View::make('hello'); });
Route::get('date', function() { return date('d/m'); });

Route::get('A/', array('before' => 'cumpleanos:31/05', function() { return View::make('hola'); }));

Route::get('B/', array('before' => 'cumpleanos:foo,bar,baz', function() { return View::make('hola'); }));

Route::get('C/', array('before' => 'ejemplo', function() { return View::make('hola'); }));

Route::get('/', array('before' => 'cumpleanos:31/05', function() { return View::make('hola'); }));

Route::get('index', 'ArticuloController@mostrarIndex');
Route::post('articulo/nuevo', 'ArticuloController@nuevoArticulo');

/*Route::controller('Articulo', 'Blog\Controller\Articulo');
*/
Route::get('example', function() { return View::make('ejemplo'); });