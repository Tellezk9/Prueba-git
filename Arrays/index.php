<?php

$contactos = array(
    array(
        'nombre' => 'kevin',
        'email' => 'kevin@tellez'
    ), array(
        'nombre' => 'Tellez',
        'email' => 'tellez@alexander'
    ), array(
        'nombre' => 'Alexander',
        'email' => 'tellez@guerrero'
    )
);
$i = 0;

foreach ($contactos as $contacto) {
    echo $contacto['nombre'];
    echo "<br>";
    echo $contacto['email'];
    echo "<br>";
    echo "<br>";

    $i++;
}
