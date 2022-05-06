<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        echo "instancia del objeto creada";
    }
    
    
    public function __destruct()
    {
     echo "<br>";
     echo "Destruyendo el objeto";   
    }
}

$usuario = new Usuario();

for ($i=0; $i < 200; $i++) { 
    echo $i."<br>";
}