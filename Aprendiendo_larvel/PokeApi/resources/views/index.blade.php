@extends('layoud')

@section('content')
    <h1 class="text-center">Pokemon</h1>



    {{-- @foreach ($datas as $data) --}}
    <div class="card mt-3 mb-4">
        <div class="card-body carousel slide">
            <h4 class="card-title text-center">{{ strtoupper($datas->name) }}</h4>

            {{-- Imagenes --}}
            <div id="carouselExampleControls" class="carousel slide mr-0" data-bs-ride="carousel" style="float: left;">
                <div class="carousel-inner" style="width: 202px;">
                    <div class="carousel-item active">
                        <img src="{{ $datas->sprites->front_default }}" class="img-fluid rounded-start" alt="pikachu"
                            width="200" height="200px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $datas->sprites->back_default }}" class="img-fluid rounded-start" alt="pikachu"
                            width="200" height="200px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $datas->sprites->front_shiny }}" class="img-fluid rounded-start" alt="pikachu"
                            width="200" height="200px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $datas->sprites->back_shiny }}" class="img-fluid rounded-start" alt="pikachu"
                            width="200" height="200px">
                    </div>
                </div>
            </div>
            <div class="card" style="width: 70%;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a class="btn" data-bs-toggle="collapse" href="#habilidades" role="button"
                            style="width: 100%" aria-expanded="false" aria-controls="habilidades">
                            Habilidades
                        </a>
                        </p>
                        <div class="collapse" id="habilidades">
                            <div class="card card-body">
                                @foreach ($datas->abilities as $item)
                                    {{ $item->ability->name }}<br>
                                @endforeach
                            </div>
                        </div>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <a class="btn" data-bs-toggle="collapse" href="#movimientos" role="button"
                            style="width: 100%" aria-expanded="false" aria-controls="movimientos">
                            Movimientos
                        </a>
                        </p>
                        <div class="collapse" id="movimientos">
                            <div class="card card-body">
                                @foreach ($datas->moves as $item)
                                    {{ $item->move->name }}<br>
                                @endforeach
                            </div>
                        </div>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <a class="btn" data-bs-toggle="collapse" href="#estadisticas" role="button"
                            style="width: 100%" aria-expanded="false" aria-controls="estadisticas">
                            Estadisticas
                        </a>
                        </p>
                        <div class="collapse" id="estadisticas">
                            <div class="card card-body">
                                @foreach ($datas->stats as $item)
                                    {{ $item->stat->name }}: {{ $item->base_stat }}
                                    <br>
                                @endforeach
                            </div>
                        </div>
                        </p>
                    </li>
                </ul>

            </div>

            {{-- <h5 class="card-title">{{ $data->ability->name }}</h5> --}}
            {{-- <a href="{{ $data->url }}" class="card-link">{{ $data->url }}</a> --}}
        </div>
    </div>

    <a href="{{route('buscador')}}" class="btn btn-danger">Regresar</a>
    {{-- @endforeach --}}
@endsection
