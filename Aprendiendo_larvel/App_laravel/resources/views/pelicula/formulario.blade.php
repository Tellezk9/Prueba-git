<h1>Formulario en laravel</h1>
<form action="{{route('recibir')}}" method="post">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="email">Correo</label>
    <input type="email" name="email">

    <input type="submit" value="Enviar">
</form>