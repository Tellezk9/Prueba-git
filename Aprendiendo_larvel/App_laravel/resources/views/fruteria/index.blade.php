@extends('layoud')

@section('content')
    <h1>Fruteria
        <a href="{{ route('crearFruta') }}" class="btn btn-primary">+</a>
    </h1>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($frutas as $fruta)
                <tr>
                    <td>{{ $fruta->id }}</td>
                    <td><a href="{{ route('detalleFruta', $fruta->id) }}">{{ $fruta->nombre }}</a></td>
                    <td>{{ $fruta->descripcion }}</td>
                    <td>${{number_format($fruta->precio)}}</td>
                    <td>
                        <a href="{{ route('editarFruta', $fruta->id) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('eliminarFruta', $fruta->id) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$frutas->links('vendor.pagination.bootstrap-4')}}
@endsection
