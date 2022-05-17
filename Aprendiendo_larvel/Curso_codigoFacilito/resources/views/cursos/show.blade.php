@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 text-center">
            <center><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbpfmJObvzZ52gzFUByBRXAR_2pHjYuKX0H6m1TbFl4Q&s"
                    width="50%"></center>
            <div class="card-body">
                <h5 class="card-title">{{ $curso->nombre }}</h5>
                <p class="card-text">{{ $curso->descripcion }}</p>
                <p class="card-text"><small class="text-muted">Last updated {{$curso->updated_at}}</small></p>
            </div>
        </div>
        <a href="{{ route('cursos.index') }}" class="btn btn-danger">Regresar</a>
    </div>
@endsection
