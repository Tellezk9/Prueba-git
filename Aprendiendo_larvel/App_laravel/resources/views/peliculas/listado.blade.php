<h1>Validaciones</h1>
@if ($titulo && count($listado) >= 5)
    <h1>EL titulo existe y es este: {{ $titulo }}</h1>
    <h1> el listado es mayor a 5</h1>
@elseif($titulo)
    <h1>EL titulo esxiste y es este: {{ $titulo }}</h1>
    <h1> el listado No es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif


<h1>{{ $titulo }}</h1>

<ul>
    @foreach ($listado as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

<hr>

<!-- BUCLES -->
<h1>Bucles</h1>
<h2>For</h2>
@for ($i = 0; $i < 20; $i++)
    el numero es: {{ $i }} <br />
@endfor

<hr>

<h2>While</h2>
<?php $contador = 1; ?>
@while ($contador <= 50)
    @if ($contador % 2 == 0)
        Numero Par: {{ $contador }}
        <br/>
    @endif

    <?php $contador++; ?>
@endwhile

<input Myarray[]>