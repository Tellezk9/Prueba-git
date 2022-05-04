@extends('template')

@section('content')
<div>

    <div class="my-4">
        <h1 class="display-4">Registrar Nota</h1>
    </div>
    
    @if (session('mensaje'))
     <div class="alert alert-success">{{session('mensaje')}}</div>   
    @endif

    <div>
        <form action="{{route('notas.crear')}}" method="POST">

            @error('nombre')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                El nombre es requerido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror @if ($errors->has('descripcion'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                La descripción es requerida
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @csrf
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"  value="{{old('descripcion')}}">
            <button class="btn btn-primary btn-block">Agregar</button>
        </form>
    </div>
</div>
@endsection