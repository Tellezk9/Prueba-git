<?php

require_once '../vendor/autoload.php';
$db = new mysqli("localhost", "root", "root", "notas_master");
$db->query("SET NAMES 'utf8'");

$consulta = $db->query("SELECT * FROM `notas`");
$rows = $consulta->num_rows;
var_dump($rows);
$numero_elementos_pagina = 2;

// use Stefangabos\zebra_pagination\Zebra_Pagination;

//Hacer paginacion
$pagination = new Zebra_Pagination();

//Numero total de elementos a paginar
$pagination->records($rows);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);
$page = $pagination->get_page();

$empieza_aqui = (($page - 1) * $numero_elementos_pagina);


$notas = $db->query("SELECT * FROM notas LIMIT " . $empieza_aqui . ", " . $numero_elementos_pagina . ";");

// echo "SELECT * FROM notas LIMIT " . $empieza_aqui . ", " . $numero_elementos_pagina;
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->nombre}</h1>";
    echo "<h3>{$nota->descripcion}</h3></h1>";
}

$pagination->render();