<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<body>
    <div class="container">
        <div>
            <a href="{{ route('index') }}" class="btn btn-primary">index</a>
            <a href="{{ route('fotos') }}" class="btn btn-primary">fotos</a>
            <a href="{{ route('nosotros') }}" class="btn btn-primary">Nosotros</a>
            <a href="{{ route('tabla') }}" class="btn btn-primary">Tabla</a>
        </div>
        <br>
        @yield('content')
    </div>
</body>

</html>
