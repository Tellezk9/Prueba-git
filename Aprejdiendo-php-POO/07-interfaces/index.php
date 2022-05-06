<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
}

class iMac implements Ordenador{
    public $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }
    public function encender(){}
    public function apagar(){}
    public function reiniciar(){}
    public function desfragmentar(){}
}

$macintosh = new iMac();
$macintosh->setModelo("Macbook PRO 2019");
echo $macintosh->getModelo();
echo "<br>";
var_dump($macintosh);