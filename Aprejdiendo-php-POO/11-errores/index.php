<?php

//exception es que hay un error y se imprime en pantalla
// throw new Exception('Hay un error');


//try and catch sirve para capturar errores en codigo susceptible a estos 

try {
    if (isset($_GET['id'])) {
        echo "<h1>El parametro es:" . $_GET['id'] . "</h1>";
    } else {
        throw new Exception('Faltan parametros por la URL');
    }
} catch (\Exception $e) {
    echo "Ha habido un error <br>" . $e->getMessage();
} 
// finally {
//     echo "todo correcto";
// }
