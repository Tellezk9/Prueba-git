<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Fruteria</h1>
<ul>
    @foreach ($frutas as $fruta)
    <li>
       <a href="{{route('detalleFruta', $fruta->id)}}">{{$fruta->nombre}}</a>
    </li>
    @endforeach
</ul>

<a href="" class="btn btn-primary">crear</a>