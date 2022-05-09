<?php 

class NotaController{
    
    public function listar(){
        //Modelo
        require_once 'modelo/nota.php';

        //Logica Contolador
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola mundo PHP MVC');
        
        // Vista
        require_once 'vista/nota/listar.php';
    }

    public function crear(){

    }

    public function borrar(){

    }

}