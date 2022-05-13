<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function permiso()
    {
        try {
        $usuario = auth()->user()->name;
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('mensaje', 'Ud no pued entrar sin autenticarse');
        }
        
        // $usuario = auth();
        dd($usuario);
        // // return 'hola';
        // return view('permiso.index');
    }
}
