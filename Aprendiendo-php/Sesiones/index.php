<?php

/*

SESION: ALMACENAR Y PERSISTIR DATOS DEL USUARIO MIENTRAS QUE NAVEGA EN UN SITIO WEB HASTA QUE CIERRA SESSION O CIERRA EL NAVEGADOR

*/

//inicia la session

session_start();

$variable_normal = "Soy una cadena de texto";

//variable de sesion que se puede usar en cualquier pagina del dominio
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal;
echo "<br>";
echo $_SESSION['variable_persistente'];
echo "<br>";
echo "<a href='global.php'>global</a>";
echo "<br>";
echo "<br>";
echo "<a href='logout.php'>Cerrar Sesion</a>";
