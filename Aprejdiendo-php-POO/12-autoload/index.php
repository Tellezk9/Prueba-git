<?php

require_once 'autoload.php';

// require 'usuario.php';
// require 'entrada.php';
// require 'categoria.php';

echo "<br>";
echo "<h1>Se estan cargando todas las clases a travez de un fichero php que las llama</h1>";
echo "<br>";

$usuario = new Usuario();
echo $usuario->nombre;

echo "<br>";

$entrada = new Entrada();
echo $entrada->titulo;
