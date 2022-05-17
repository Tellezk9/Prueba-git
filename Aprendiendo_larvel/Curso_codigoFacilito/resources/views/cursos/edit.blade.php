@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-75">
            <div class="card-body">
                <h1 class="card-title text-center">Editar Curso</h1>
                <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del curso"
                        value="{{ $curso->nombre }}">

                    <label for="descripcion">Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion" id="descripcion"
                        placeholder="Descripcion del curso">{{ $curso->descripcion }}</textarea>

                    <label for="nota">Nota</label>
                    <input type="number" class="form-control" name="nota" id="nota" placeholder="Nota"
                        value="{{ $curso->nota }}">
                    <br>
                    <a href="{{ route('cursos.index') }}" class="btn btn-danger">Regresar</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
