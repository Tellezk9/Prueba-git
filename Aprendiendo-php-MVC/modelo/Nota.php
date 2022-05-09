<?php

require_once 'modeloBase.php';

class Nota extends ModeloBase{
    public $nombre;
    public $contenido;



    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of contenido
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set the value of contenido
     */
    public function setContenido($contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }
}