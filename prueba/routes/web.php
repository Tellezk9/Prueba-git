<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', function(){
    return view('welcome');
});

Route::get('index', [PagesController::class,'index'])->name('index');
// Route::get('fotos/{numero?}', function ($numero = 'sin numero') {
//     return 'Esto es una fotografia: ' . $numero;
// })->where('numero', '[0-9]+');


Route::get('fotos', [PagesController::class,'fotos'])->name('fotos');
Route::get('tabla', [PagesController::class,'tabla'])->name('tabla');
Route::get('tabla/{id}', [PagesController::class,'edit'])->name('notas.edit');

Route::get('nosotros/{nombre?}', [PagesController::class,'nosotros'])->name('nosotros');
