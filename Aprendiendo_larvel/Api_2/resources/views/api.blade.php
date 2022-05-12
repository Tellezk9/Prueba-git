@extends('layoud')

@section('content')
    <h1>Api</h1>
    <ul>
        {{-- {{dd($data)}} --}}
        @foreach ($data as $item)
            <li>{{$item->name}}</li>
        @endforeach
    </ul>
@endsection