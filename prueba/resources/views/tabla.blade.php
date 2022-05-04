@extends('template')

@section('content')
    <div>
        <div class="my-4">
            <h1 class="display-4">Notas <a href="{{ route('notas.add') }}" class="btn btn-primary">+</a></h1>
        </div>
        <div>
            @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
            @endif
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notas as $nota)
                        <tr>
                            <td>{{ $nota->id }}</td>
                            <td>{{ $nota->nombre }}</td>
                            <td>{{ $nota->descripcion }}</td>
                            <td>
                                <a href="{{ route('notas.edit', $nota) }}" class="btn btn-success">editar</a>
                                <a href="{{ route('notas.delete', $nota) }}" class="btn btn-danger">eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $notas->links() }}
        </div>
    </div>
@endsection
