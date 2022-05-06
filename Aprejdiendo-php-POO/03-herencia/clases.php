<?php

//HEERENCIA: la posibilidad de compartir atributos y metodos entre clases

class Persona
{
    public $nombres;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre()
    {
        return $this->nombres;
    }
    public function getApellido()
    {
        return $this->apellidos;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function setNombre($nombres)
    {
        $this->nombres = $nombres;
    }
    public function setApellido($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }


    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando";
    }
}



//  Para heredar metodos de otra clase se usa la clase  
//  "extends 'Nombre de la clase que se desea heredar funciones'"
class Informatico extends Persona
{

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, PHP, JS, CSS";
        $this->experienciaProgramador = 10;
    }

    public function programar()
    {
        return "Soy programador";
    }

    public function repararOrdenador()
    {
        return "Reparar ordenador";
    }
    public function hacerOfimatica()
    {
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico
{

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        //parent::__construct() llama las variables que estan en el contructor del padre para poder tener
        //ambos constructores funcionando
        parent::__construct();

        $this->auditarRedes = "Experto";
        $this->experienciaRedes = 5;
    }
    public function auditoria()
    {
        return "Estoy auditando una red";
    }
}
