<?php
require 'carro.php';
$carro = new MisCarros();
require 'motos.php';
$moto = new MisMotos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Carros</h1>
    <?php
    echo "Color: " . $carro->color();
    echo "<br>";
    echo "Modelo: " . $carro->modelo();
    echo "<br>";
    echo "Estado: " . $carro->estado();
    echo "<br>";
    echo "año: " . $carro->anio();
    echo "<br>";
    echo "caballos: " . $carro->caballos();
    echo "<br>";
    ?>
    <hr>
    <h1>Motos</h1>
    <?php
    echo "Color: " . $moto->color();
    echo "<br>";
    echo "Tipo de Moto: " . $moto->tipoMoto();
    echo "<br>";
    echo "Estado: " . $moto->estado();
    echo "<br>";
    echo "año: " . $moto->anio();
    echo "<br>";
    echo "caballos: " . $moto->caballos();
    echo "<br>";
    ?>

</body>

</html>