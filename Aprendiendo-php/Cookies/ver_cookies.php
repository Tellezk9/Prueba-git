<?php


/*
Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal, es un array asiciativo.

*/
if (isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}

if (isset($_COOKIE['unyear'])) {
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}

echo "<a href='borrar_cookie.php'>Cerrar mi Cookie</a>";
