<!-- app/views/form.blade.php -->

<form action="{{ url('gestionar-formulario') }}" method="POST" enctype="multipart/form-data">

    <input type="file" name="libro" />
    <input type="submit">
</form>