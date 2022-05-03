<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    return view('index', ['numero' => '1']);
    
    }

    public function fotos(){

        return view('fotos');
    }

    public function nosotros($nombre = null){

    $datos = ['kevin', 'alexander', 'tellez'];
    // return view('nosotros', ['datos' => $datos]);

    //compact sirve para mandar arrays asociativos
    return view('nosotros', compact('datos', 'nombre'));
    }
}
