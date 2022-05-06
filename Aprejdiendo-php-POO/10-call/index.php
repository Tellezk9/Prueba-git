<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments){
        return "No existe el metodo";
    }
}

$persona = new Persona("Kevin", 666, "Cucuta");
echo $persona->getNombre();

