<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Narvales</title>
    </head>
    <body>
        @include('cabecera')

        <a href="{{ action('Stark@tony', array('foo'), true) }}">Mi enlace</a>

        @include('pie')
    </body>
</html>