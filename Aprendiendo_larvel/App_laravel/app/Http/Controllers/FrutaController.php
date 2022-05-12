<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frutas = DB::table("frutas")->paginate(10);
        return view('fruteria.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fruteria.acciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frutaNueva = new Fruta();
        $frutaNueva->nombre = $request->nombre;
        $frutaNueva->descripcion = $request->descripcion;
        $frutaNueva->precio = $request->precio;
        $frutaNueva->save();
        return back()->with('mensaje', 'La fruta ha sido registrada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function show(Fruta $fruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function edit($fruta)
    {
        $buscar = DB::table('frutas')->where('id','=', $fruta)->first();
        // return $buscar;
        return view('fruteria.acciones.editar', compact('buscar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fruta)
    {
        $editar = Fruta::findOrFail($fruta);
        $editar->nombre = $request->nombre;
        $editar->descripcion = $request->descripcion;
        $editar->precio = $request->precio;
        $editar->save();
        return back()->with('mensaje', 'La fruta ha sido Actualizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function destroy($fruta)
    {
        $borrar = Fruta::findOrFail($fruta);
        $borrar->delete();
        return back()->with('mensaje', 'La fruta ha sido Borrada Satisfactoriamente');
    }

    public function detalle($id)
    {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        return view('fruteria.detalle', compact('fruta'));
    }
}
