<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('buscador', function () {
    return view('buscar');
})->name('buscador');
Route::post('buscar', function (Request $request) {
    // return $request;
    // return $request->nombre;
    return redirect("index/$request->nombre");
})->name('buscar');

Route::get('index/{pokemon?}', function (Client $cliente, $pokemon = null) {
    try {
        $response = $cliente->request('GET', $pokemon);
        $datas = json_decode($response->getBody());
        // dd($datas);
        return view('index', compact('datas'));
    } catch (ClientException $e) {
        return back()->with('mensaje', 'El Pokemon solicitado no esta disponible.');
        $response = $e->getResponse()->getBody(true);
        // var_dump($response);
    }
})->name('index');
