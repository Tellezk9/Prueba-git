<?php

/*
Cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web
        con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

//Crear cookie

// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio); //Estructura de la cookie

//Cookie basica

setcookie("micookie", "valor de mi galleta");

//cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));

echo "<a href='ver_cookies.php'>ver cookies</a>";
