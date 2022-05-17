@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-75">
            <div class="card-body">
                <h1 class="card-title text-center">Nuevo Curso</h1>
                <form action="{{route('cursos.store')}}" method="POST">
                    @csrf
                    {{-- @method('POST') --}}
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del curso">
                    <label for="nombre">Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion" id="nombre" placeholder="Descripcion del curso"></textarea>
                    <br>
                    <a href="{{ route('cursos.index') }}" class="btn btn-danger">Regresar</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
