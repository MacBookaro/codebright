<!-- app/views/layouts/base.blade.php -->

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>

    @section('cabecera')
        <link rel="stylesheet" href="estilo.css" />
    @show
</head>
<body>
    @yield('cuerpo')
</body>
</html>