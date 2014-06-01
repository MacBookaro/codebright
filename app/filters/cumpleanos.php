<?php

/*
|--------------------------------------------------------------------------
| Programador: Francisco Naranjo - MacBookaro
| Fecha: 2014/05/31 07:38 p.m.
|
| app/filters/cumpleanos.php
|--------------------------------------------------------------------------
*/

class filtroCumpleanos
{
    public function filter($ruta, $peticion, $fecha)
    {
        if (date('d/m') == $fecha) {
            return View::make('cumpleanos');
        }
    }
}
