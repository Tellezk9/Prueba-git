@extends('layoud')

@section('content')
    <div class="text-center mt-5 mb-5">
        <h1 class="display-1">Consultar</h1>
        <form action="{{ route('buscar') }}" method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <input type="text" name="nombre" class="form-control mb-3">

            <input type="submit" value="Buscar" class="btn btn-success btn-lg">
        </form>
    </div>

    @if (session('mensaje'))
        <div class="text-center">
            <h3 style="color: red">{{ session('mensaje') }}</h3>
        </div>
    @endif
@endsection
