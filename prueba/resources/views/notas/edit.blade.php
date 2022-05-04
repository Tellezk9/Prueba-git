@extends('template')

@section('content')
    <div>
        <h1 class="display-4">Editar Nota</h1>
        <br>

        @if (session('mensaje'))
            <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif
        <form action="{{ route('notas.actualizar', $notas->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $notas->nombre }}"
                required>
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
                value="{{ $notas->descripcion }}" required>
            <button class="btn btn-primary btn-block">Agregar</button>
        </form>
    </div>
@endsection
