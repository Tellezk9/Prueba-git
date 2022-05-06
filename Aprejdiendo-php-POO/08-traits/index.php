<?php

//TRAIT: Nos permite definir una serie de metodos para compartirlos en diferentes clases


trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es" . $this->nombre . "</h1>";
    }
}


class Coche
{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona
{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class VideoJuego
{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = " Ferrari";

$persona = new Persona();
$persona->nombre = " Kevin Tellez";

$videojuego = new VideoJuego();
$videojuego->nombre = " Halo";

echo "<br>";
echo $coche->mostrarNombre();
echo "<br>";
echo $persona->mostrarNombre();
echo "<br>";
echo $videojuego->mostrarNombre();
