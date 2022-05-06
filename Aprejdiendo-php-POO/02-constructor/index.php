<?php
require 'coche.php';




//Al llamar la clase lo primero que se llama es el constructor y si esta esperando parametros se ingresan al registrar la clase

$coche = new Coche("verde","Ferrari",500,"No se",20,2);
// echo $coche->acelerar();
// echo $coche->acelerar();
// echo $coche->acelerar();
// echo $coche->acelerar();
// echo $coche->acelerar();

// echo $coche->getVelocidad()."km/h";
// echo "<br>";
// echo $coche->getColor("azul"); 


// $coche->color = "Rosa";
// $coche->modelo = "Audi";//No me deja acceder porque esta protejida y solo se puede acceder a ella con un metodo o funcion
// $coche->setModelo("audi");
// $coche->getModelo();
// echo "Modelo: ".$coche;
// var_dump($coche->getModelo());



echo $coche->mostrarInformacion($coche);
