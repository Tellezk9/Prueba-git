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
    return view('index',['numero' => '1']);
});
Route::get('fotos/{numero?}', function ($numero = 'sin numero') {
    return 'Esto es una fotografia: ' . $numero;
})->where('numero', '[0-9]+');
