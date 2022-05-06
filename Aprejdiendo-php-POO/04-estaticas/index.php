<?php
require 'configuracion.php';

Configuracion::setColor("red");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);


echo Configuracion::$color."<br>";
echo Configuracion::$entorno."<br>";
echo Configuracion::$newsletter."<br>";