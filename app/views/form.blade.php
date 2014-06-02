<!-- app/views/form.blade.php -->

{{ Form::open(array('url' => 'ruta/destino')) }}
    <br>
    {{ Form::label('txtNombre', 'Nombre', ['id' => 'lblNombre', 'name' => 'lblNombre']) }}
    {{ Form::text('nombre', 'Taylor Otwell', ['id' => 'txtNombre', 'name' => 'txtNombre']) }}
    <br>
    {{ Form::label('txtDescripcion', 'Descripción', ['name' => 'lblDescripcion']) }}
    {{ Form::textarea('txtDescripcion', '¡El mejor campo!', ['cols' => 20]) }}
    <br>
    {{ Form::label('secreto', 'Súper Secreto') }}
    {{ Form::password('secreto') }}

{{ Form::close() }}
