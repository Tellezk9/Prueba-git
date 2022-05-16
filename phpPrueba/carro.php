<?php

class MisCarros
{
    public $color = "rojo";
    public $modelo = "Chevrolet";
    public $estado = "Nuevo";
    public $anio = 2021;
    public $caballos = 12;

    public function __construct()
    {
        $padre = "MI CARRO";
       return $padre;
    }

    public function color()
    {
        return $this->color;
    }

    public function modelo()
    {
        return $this->modelo;
    }

    public function estado()
    {
        return $this->estado;
    }

    public function anio()
    {
        return $this->anio;
    }

    public function caballos()
    {
        return $this->caballos;
    }
}
