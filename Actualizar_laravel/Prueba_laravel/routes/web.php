<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MiddleController;
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

Auth::routes();

Route::get('middleware/{id?}', [MiddleController::class, 'index'])->middleware('control')->name('ver');
Route::get('pelicula/{id?}', [MiddleController::class, 'peli']);

route::get('admin', [AdminController::class, 'index'])->middleware(['auth', 'admin'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
