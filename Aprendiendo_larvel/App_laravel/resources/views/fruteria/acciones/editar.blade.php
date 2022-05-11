@extends('layoud')

@section('content')
    <h1 class="text-center">Editar Fruta</h1>
    <form action="{{route('update', $buscar->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$buscar->nombre}}" class="form-control mb-2">

        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="{{$buscar->descripcion}}" class="form-control mb-2">

        <label for="precio">Precio</label>
        <input type="number" name="precio" value="{{$buscar->precio}}" class="form-control mb-4">

        <input type="submit" class="btn btn-success" value="Actualizar">
        <a href="{{route('fruteria')}}" class="btn btn-danger">Inicio</a>
    </form>
    {{-- @if (session('mensaje'))
        <h3 style="color: green">{{ session('mensaje') }}</h3>
    @endif --}}
@endsection