<?php

use Illuminate\Support\Facades\Route;

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
Route::get('index', function () {
    return view('index', ['numero' => '1']);
})->name('index');
// Route::get('fotos/{numero?}', function ($numero = 'sin numero') {
//     return 'Esto es una fotografia: ' . $numero;
// })->where('numero', '[0-9]+');


Route::get('fotos', function () {
    return view('fotos');
})->name('fotos');

Route::get('nosotros/{nombre?}', function ($nombre = null) {
    $datos = ['kevin', 'alexander', 'tellez'];
    // return view('nosotros', ['datos' => $datos]);

    //compact sirve para mandar arrays asociativos
    return view('nosotros', compact('datos', 'nombre'));
})->name('nosotros');
