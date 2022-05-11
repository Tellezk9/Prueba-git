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
        $frutas = Fruta::all();
        return view('fruteria.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fruta.acciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Fruta $fruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruta $fruta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruta $fruta)
    {
        //
    }

    public function detalle($id)
    {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        return view('fruteria.detalle', compact('fruta'));
    }
}
