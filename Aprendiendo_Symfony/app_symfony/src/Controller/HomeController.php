<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con Symfony :D'
        ]);
    }



    public function animales($nombre, $apellidos){
        $title = 'Bienvenido a la pagina de animale';

        return $this->render('home/animales.html.twig',[
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos
        ]);
    }


    public function redirigir()
    {
        // return $this->redirectToRoute('animales',[
        //     'nombre' => 'Juan Pedro',
        //     'Apellidos' => 'Lopez'
        // ]);

        return $this->redirect('https://pokeapi.co/');
    }
}
