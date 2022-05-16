<?php
// include 'carro.php';

class MisMotos extends MisCarros
{
    public $tipoMoto = "DT";

    public function tipoMoto(){
        return $this->tipoMoto;
    }
}