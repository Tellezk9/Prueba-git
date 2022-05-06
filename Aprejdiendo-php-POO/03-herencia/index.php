<?php

require 'clases.php';

$persona = new Persona();

$persona->setNombre("kevin");
echo "<---------- LLAMANDO CLASES DE PERSONA ---------->";
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($persona);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<---------- LLAMANDO CLASES DE PERSONA EN INFORMATICO ---------->";
echo "<br>";
echo "<br>";
echo "<br>";

$informatico = new Informatico();

$informatico->setNombre("Kevin Informatico");

var_dump($informatico);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<---------- LLAMANDO CLASES DEL CONSTRUCTOR  DE INFORMATICO EN TECNICOREDES ---------->";
echo "<br>";
echo "<br>";
echo "<br>";

$redes = new TecnicoRedes();

$redes->setNombre("Redes nombre");

var_dump($redes);
