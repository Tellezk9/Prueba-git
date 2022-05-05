<?php

//crear un directorio
//is_dir() sirve para verificar si el directorio existe
//mkdir() sirve para crear el directorio y se le agregan los permisos con los numeros
if (is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('no se puede crear la carpeta');
    echo "carpeta creada";
} else {
    echo "ya existe la carpeta";
}
