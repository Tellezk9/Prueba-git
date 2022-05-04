@extends('template')

@section('content')
<div>
    <h1 class="display-4">Editar Nota</h1>
    <h2>Id: {{$notas->id}}</h2>
    <h2>Nombre: {{$notas->nombre}}</h2>
    <h2>Descripcion: {{$notas->descripcion}}</h2>
</div>
@endsection