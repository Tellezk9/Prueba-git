<?php

//abrir un archvio con php

//se usa la funcion fopen("Ruta del archivo", "modo de abrilo(r = read, w= write, x = execute a+ = write and read") (file open) y se le ingresa la ruta del archivo y que se va a hacer con el
//Abrir archivo
$abrir_archivo = fopen("fichero.txt","a+");

//leer contenido con el while y la funcion feof() para que recorra todas las lineas del archivo
while (!feof($abrir_archivo)) {
    $contenido = fgets($abrir_archivo);
    echo $contenido."<br>";

}


//Escribir en el archivo

// fwrite($abrir_archivo, "<br>Soy un texto metido desde PHP :D");

//Cerrrar archivo
fclose($abrir_archivo);


//Copiar un fichero
// copy('fichero.txt', 'fichero_copiado.txt') or die("Error copiado");


//Renombrar fichero
// rename('fichero_copiado.txt','ficherito.txt');

//Eliminar fichero
// unlink("ficherito.txt") or die('Error al borrar');

//comprobar si el archivo existe
if (file_exists("fichero.txt")) {
    echo "El fichero existe :D";
}else {
    echo "no existe D:";
}