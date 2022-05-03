@extends('template')

@section('content')
    <div>
        <h1>Equipo de trabajo</h1>
        @foreach ($datos as $dato)
            <a href="{{ route('nosotros', $dato) }}" class=" h4 text-danger">{{ $dato }}</a><br>
        @endforeach

        @if (!empty($nombre))
            @switch($nombre)
                @case($nombre == 'kevin')
                    <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
                    <p>
                        {{ $nombre }} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, nisi atque aperiam, quam
                        ut ipsam ullam labore consequuntur impedit quae aliquam voluptate ea quas veritatis vero sit a fugiat iusto.
                    </p>
                @break

                @case($nombre == 'alexander')
                    <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
                    <p>
                        {{ $nombre }} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, nisi atque aperiam, quam
                        ut ipsam ullam labore consequuntur impedit quae aliquam voluptate ea quas veritatis vero sit a fugiat iusto.
                    </p>
                @break

                @default
            @endswitch
        @endif
    </div>
@endsection
