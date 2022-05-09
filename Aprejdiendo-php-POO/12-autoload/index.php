<?php

// require_once 'autoload.php';

require 'clases/MisClases/categoria.php';
require 'clases/MisClases/usuario.php';
require 'clases/MisClases/entrada.php';

// echo "<br>";
// echo "<h1>Se estan cargando todas las clases a travez de un fichero php que las llama</h1>";
// echo "<br>";

// $usuario = new Usuario();
// echo $usuario->nombre;

// echo "<br>";

// $entrada = new Entrada();
// echo $entrada->titulo;


//ESPACIOS DE NOMBRE Y PAQUETES

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
        
        // $this->usuario = new Usuario();
        // $this->categoria = new Categoria();
        // $this->entrada = new Entrada();
    }

}

$clase = class_exists('usuario');
if ($clase) {
    echo "<h1>La clase existe</h1>";
}
else {
    echo "<h1>La clase NO existe</h1>";
}
$principal = new Principal();
echo var_dump($principal->usuario);