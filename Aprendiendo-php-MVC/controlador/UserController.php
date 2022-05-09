<?php

class UserController
{

    public function mostrarTodos()
    {
        require_once 'modelo/usuario.php';
        $usuario = new Usuario();
        $usuario->conseguirTodos();
        return $usuario->conseguirTodos();
    }

    public function crear()
    {
        require_once 'vista/usuarios/crear.php';
    }
}
