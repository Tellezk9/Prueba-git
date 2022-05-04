<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($numero = null)
    {
        return view('index', ['numero' => '1']);
    }


    public function fotos()
    {

        return view('fotos');
    }


    public function nosotros($nombre = null)
    {

        $datos = ['kevin', 'alexander', 'tellez'];
        // return view('nosotros', ['datos' => $datos]);

        //compact sirve para mandar arrays asociativos
        return view('nosotros', compact('datos', 'nombre'));
    }

    public function tabla()
    {
        $notas = Nota::paginate(10);
        return view('tabla', compact('notas'));
    }

    public function edit($id)
    {
        $notas = Nota::findOrFail($id);
        return view('notas.edit', compact('notas'));
    }
    public function add()
    {
        return view('notas.add');
    }
    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notasNueva = new Nota;
        $notasNueva->nombre = $request->nombre;
        $notasNueva->descripcion = $request->descripcion;

        $notasNueva->save();

        // return $request->all();
        return back()->with('mensaje', 'La nota fue agregada :D');
    }

    public function destroy($id)
    {
        $notas = Nota::findOrFail($id);
        $notas->delete();
        return  back()->with('mensaje', 'La nota fue borrada');
    }
    public function update(Request $request, $id)
    {
        $notasUpdate = Nota::findOrFail($id);
        $notasUpdate->nombre = $request->nombre;
        $notasUpdate->descripcion = $request->descripcion;
        $notasUpdate->save();
        return back()->with('mensaje', 'La nota fue actualizada');
    }
}
