
<?php
// use Coche as GlobalCoche;

class Coche
{

    //Atributos o propiedades (Variables globales)

    //PUBLIC:   Podemos acceder desde cualquier lugar, dentro de la clase actual
    //          dentro de clases qeu hereden esta clase o fuera de la clase
    public $color;

    //PROTECTED: Podemos acceder desde la clase que los define y desde clases que hereden esta clase
    protected $modelo;

    //PRIVATE:   Unicamente se puede acceder desde esta clase
    private $velocidad;


    public $marca;
    public $caballaje;
    public $plazas;


    //Los Metodos o funciones son las acciones que puede hacer un objeto

    public function __construct($color, $modelo, $velocidad, $marca, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->marca = $marca;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;

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
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
} //fin de la clase
