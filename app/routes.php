<?php

/*
 |--------------------------------------------------------------------------
 | Programador: Francisco Naranjo - MacBookaro
 | Fecha: 2014/05/31 07:38 p.m.
 |
 | Application Routes
 |--------------------------------------------------------------------------
 */

Route::get('0', function() { return View::make('hello'); });
Route::get('date', function() { return date('d/m'); });

Route::get('A/', array('before' => 'cumpleanos:31/05', function() { return View::make('hola'); }));

Route::get('B/', array('before' => 'cumpleanos:foo,bar,baz', function() { return View::make('hola'); }));

Route::get('C/', array('before' => 'ejemplo', function() { return View::make('hola'); }));

Route::get('D/', array('before' => 'cumpleanos:31/05', function() { return View::make('hola'); }));

Route::get('index', 'ArticuloController@mostrarIndex');
Route::post('articulo/nuevo', 'ArticuloController@nuevoArticulo');

/*Route::controller('Articulo', 'Blog\Controller\Articulo');
*/
Route::get('example', function() { return View::make('ejemplo'); });

//Route::get('/', function() { return View::make('ejemplo'); });

Route::get('/url/actual', function() { return URL::current();});

Route::get('/url/full', function() { return URL::full();});

Route::get('primera', function() { return Redirect::to('segunda'); });

Route::get('segunda', function() { return URL::previous(); });

Route::get('el/{primero}/vengador/{segundo}', array('as' => 'ironman', function($primero, $segundo) { return "Tony Stark, el {$primero} vengador {$segundo}"; }));

Route::get('ejemplo', function() { return URL::route('ironman', ['mejor', 'conocido']); });

class Stark extends BaseController {
    public function tony($queEsTony) {
        return 'Puedes contar conmigo, para hacerme felíz.';
    }
}

Route::get('yo/soy/iron/man', 'Stark@tony');

Route::get('ejemplo', function() { return URL::action('Stark@tony'); });

Route::get('tony/el/genio/{primero}', 'Stark@tony');

Route::get('ejemplo', function() { return URL::action('Stark@tony', array('narcisista')); });

Route::get('ejemplo', function() { return asset('img/logo.png'); });

//Route::get('/', function() { $data = Input::except('foo', 'baz'); var_dump($data); });

Route::get('post-form', function() { return View::make('form'); });

//Route::get('/', function() { Input::flash(); return Redirect::to('nueva/peticion'); });

Route::get('nueva/peticion', function() { var_dump(Input::old()); });

//Route::get('/', function() { return Redirect::to('nueva/peticion')->whithInput(Input::only('foo')); });

Route::get('/', function() { return View::make('form'); });

Route::get('info', function() { return View::make('hello'); });

//Route::post('gestionar-formulario', function() { var_dump(Input::file('libro')); });

//Route::post('gestionar-formulario', function() { return Input::file('libro')->getFileName(); });
//Route::post('gestionar-formulario', function() { return Input::file('libro')->getClientSize(); });
//Route::post('gestionar-formulario', function() { return Input::file('libro')->getMimeType(); });
//Route::post('gestionar-formulario', function() { return Input::file('libro')->guessExtension(); });
//Route::post('gestionar-formulario', function() { return Input::file('libro')->getRealPath(); });
/*Route::post('gestionar-formulario', function() {
    $fileName = Input::file('libro')->getClientOriginalName('/files');
    Input::file('libro')->move('../app/files', $fileName);
    return 'El archivo fué movido';
});*/
/*Route::get('/', function() {
    $cookie = Cookie::make('bajas-en-hidratos', 'galleta de almendras', 30);
    return Response::make('Nom nom')->withCookie($cookie);
});

Route::get('/nom-nom', function() {
    $var = Cookie::has('bajas-en-hidratos');
    var_dump($var);
});
Route::get('/', function()
{
Cookie::forget('bajas-en-hidratos');
return 'Me da que vamos tener pollo.';
});*/
Route::get('/', function() { return View::make('form'); });
