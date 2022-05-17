<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\PruebaController;
use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('articles', function () {
    return 'ruta articles';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Grupo de rutas con el mismo controlador
Route::controller(PruebaController::class)->group(function () {
    Route::get('/orders/{id?}', 'show');
    Route::get('index', 'index')->middleware('auth');
});


//Grupo de rutas Curso
// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')->name('cursos.index')->middleware('auth');
//     Route::get('cursos/create', 'create')->name('cursos.create')->middleware('auth');
//     Route::post('cursos', 'store')->name('cursos.store')->middleware('auth');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show')->middleware('auth');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit')->middleware('auth');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update')->middleware('auth');
//     Route::get('cursos/{curso}/borrar', 'destroy')->name('cursos.destroy')->middleware('auth');
// });

Route::resource('cursos', CursoController::class);