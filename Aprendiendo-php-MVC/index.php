<?php

// require  'controlador/usuario.php';
// require  'controlador/nota.php';
require  'controlador/autoload.php';
// $controlador = new UsuarioController;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MVC</title>
</head>

<body>
    <div>
        <h1>Hola mundo MVC</h1>
        <?php
        if (isset($_GET['controller'])) {
            $getController = $_GET['controller'];
            echo "Controlador: ". $getController;
            echo "<br>";

            $controlador = new $getController;

            echo "El controlador existe";
            echo "<br>";

            if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
                $action = $_GET['action'];
                echo '<div><h2>Crear nuevo';
                $controlador->$action();
                echo '</div>';

                echo "El controlador y el metodo existen";
                echo "<br>";
            } else {
                echo "La pagina que buscas no existe";
                echo "<br>";
            }
        } else {
            echo "El controlador que buscas no existe";
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>