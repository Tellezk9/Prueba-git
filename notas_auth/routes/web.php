<?php

use App\Http\Controllers\NotaController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('notas', NotaController::class);

Route::get('/crear', [NotaController::class, 'create'])->name('crear');
Route::get('editar/{id}', [NotaController::class, 'edit'])->name('editar');
