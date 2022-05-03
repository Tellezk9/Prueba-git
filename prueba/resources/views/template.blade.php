<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <div>
            <a href="{{route('index')}}" class="btn btn-primary">index</a>
            <a href="{{route('fotos')}}" class="btn btn-primary">fotos</a>
            <a href="{{route('nosotros')}}" class="btn btn-primary">Nosotros</a>
        </div>
        @yield('content')
    </div>
</body>
</html>