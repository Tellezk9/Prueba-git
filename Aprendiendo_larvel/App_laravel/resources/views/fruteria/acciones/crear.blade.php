@extends('layoud')

@section('content')
    <h1>Crear fruta</h1>
    <form action="{{ route('nueva') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre de la fruta" class="form-control" required>
        <br>

        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" placeholder="Descripcion de la fruta" class="form-control" required>
        <br>

        <label for="precio">Precio</label>
        <input type="number" name="precio" placeholder="Precio de la fruta" class="form-control" required>
        <br>
        <input type="submit"  class="btn btn-success" value="Enviar">
        <a href="{{ route('fruteria') }}"class="btn btn-danger">inicio</a>

    </form>

    {{-- @if (session('mensaje'))
        <h3 style="color: green">{{ session('mensaje') }}</h3>
    @endif --}}
@endsection
