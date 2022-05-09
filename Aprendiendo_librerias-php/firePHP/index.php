<?php

require '../vendor/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php';

$firephp = FirePHP::getInstance(true);

$frutas = array("manzanas", "naranjas", "sandias");

// \FB::log($frutas);

echo "Hola mundo :D";

// \FB::log("ESTOY EN LA CONSOLA :D");
// \FB::log("ESTOY EN LA CONSOLA :D");
// \FB::log("ESTOY EN LA CONSOLA :D");
// \FB::log("ESTOY EN LA CONSOLA :D");
// \FB::log("ESTOY EN LA CONSOLA :D");

$firephp->log('Mensaje enviado a consola');
$firephp->log($frutas, 'Mensaje');