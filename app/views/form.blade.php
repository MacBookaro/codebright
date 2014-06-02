<!-- app/views/form.blade.php -->

{{ Form::open(array('url' => 'ruta/destino', 'files' => true)) }}
    <br>
    {{ Form::label('txtNombre', 'Nombre', ['id' => 'lblNombre', 'name' => 'lblNombre']) }}
    {{ Form::text('nombre', 'Taylor Otwell', ['id' => 'txtNombre', 'name' => 'txtNombre']) }}
    <br>
    {{ Form::label('txtDescripcion', 'Descripción', ['name' => 'lblDescripcion']) }}
    {{ Form::textarea('txtDescripcion', '¡El mejor campo!', ['cols' => 20]) }}
    <br>
    {{ Form::label('secreto', 'Súper Secreto') }}
    {{ Form::password('secreto') }}
    <br>
    {{ Form::label('pandas_son_bonitos', '¿Son bonitos los pandas?') }}
    {{ Form::checkbox('pandas_son_bonitos', '1', true) }}
    <br>
    {{ Form::label('color_panda', 'Los pandas son') }}
    {{ Form::radio('color_panda', 'rojos', true) }} Rojos
    {{ Form::radio('color_panda', 'negros') }} Negros
    {{ Form::radio('color_panda', 'blancos') }} Blancos
    <br>
    {{ Form::label('color_panda', 'Los pandas son') }}
    {{ Form::select('color_panda', array(
                                         'Panda' => array(
                                             'rojos' => 'Rojos',
                                             'negros' => 'Negros',
                                             'blancos' => 'Blancos'
                                          ),
                                          'Personaje' => array(
                                             'pooh' => 'Pooh',
                                              'baloo' => 'Baloo'
                                          )
                                   ), 'negros') }}
    <br>
    {{ Form::label('email', 'Dirección e-mail') }}
    {{ Form::email('email', 'me@daylerees.com') }}
    <br>
    {{ Form::label('avatar', 'Avatar') }}
    {{ Form::file('avatar') }}
    <br>
    {{ Form::hidden('panda', 'luishi') }}
    <br>
    {{ Form::submit('Guardar') }}
{{ Form::close() }}
