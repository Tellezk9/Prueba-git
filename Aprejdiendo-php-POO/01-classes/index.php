<?php

// Programacion Orientada a Objetos en PHP (POO)


// Definir una clase
class Coche
{

    //Atributos o propiedades (Variables globales)
    public $color = "Red";
    public $modelo = "Ferrari";
    public $velocidad = "300k/h";
    public $marca = "Aventador";
    public $caballaje = 500;
    public $plazas = 2;


    //Los Metodos o funciones son las acciones que puede hacer un objeto

    function __construct()
    {
        echo "hola mundo";
        echo "<br>";
    }

    public function getColor()
    {
        //Busca la propiedad que esta en la misma clase
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }
} //fin de la clase


//crear un objeto / instanciar la clase
$coche = new Coche();

echo $coche->getVelocidad();
echo "<br>";

var_dump($coche);