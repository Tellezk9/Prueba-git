<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'titulo' => $titulo
        ]);
    }

    public function detalle()
    {
        return view('pelicula.detalle');
    }
    public function formulario()
    {
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return "El nombre es: $nombre y el email es: $email";
        var_dump($email);
    }
}
