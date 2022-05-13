<?php

use App\Http\Controllers\PermisoController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('permiso', [PermisoController::class, 'permiso'])->name('permiso')->middleware('token');

Route::get('prueba', function(){
    return 'has accedido correctamente a esta ruta';
})->middleware(['age', 'auth:sanctum']);


Route::get('no-autorizado', function(){
    return "Usted no es mayor de edad";
});