<?php
Route::filter('cumpleanosA', function($ruta, $peticion, $fecha) {
    if (date('d/m') == $fecha) {
        return View::make('cumpleanos');
    }
});

Route::filter('cumpleanosB', function($routa, $peticion, $primera, $segunda, $tercera) {
        return "{$primera} - {$segunda} - {$tercera}";
});

Route::filter('ejemplo', function($ruta, $peticion, $opcional = '¡Sip!')
{
    return "{$opcional}";
});

Route::filter('cumpleanos', 'filtroCumpleanos');
