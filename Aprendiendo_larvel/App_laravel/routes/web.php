<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Arr;
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

// Route::get('/', function () {
//     return view('welcome');
// });


/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

//Pasar parametros y probar las rutas
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mostrar-fecha', function () {
//     $titulo = "Estoy mostrando la fecha";
//     return view('mostrar-fecha', array('titulo' => $titulo));
// });

// Route::get('/pelicula/{titulo?}', function ($titulo = 'no hay pelicula seleccionada') {
//     return view('pelicula', array(
//         'titulo' => $titulo
//     ));
// });



// //Rutas con condiciones

// Route::get('/condiciones/{condicion?}/{year?}', function ($condicion = 'No selecciono la condicion', $year = 'No selecciono el año') {

//     return view('condiciones', array(
//         'middleware' => 'testyear',
//         'condicion' => $condicion,
//         'year' => $year
//     ));
// })->where(array(
//     'condicion' => '[a-z]+',
//     'year' => '[0-9]+'
// ));



// Route::get('listado-peliculas', function () {
//     $titulo = "Listado de peliculas";
//     $listado = array("Batman", "Spiderman", "Superman", "Dr strange in the multiverse of madness");
//     return view('peliculas.listado')->with('titulo', $titulo)->with('listado', $listado);
// });



//Controlador de pelicula

// Route::get('/detalle/{year?}',[
//     'middleware' => 'testyear',
// ]);

Route::get('peliculas', [PeliculaController::class, 'index'])->name('peliculas');
Route::get('/detalle', [PeliculaController::class, 'detalle'])->name('detalle');
Route::get('/formulario', [PeliculaController::class, 'formulario'])->name('formulario');
Route::post('/recibir', [PeliculaController::class, 'recibir'])->name('recibir');


//Crud Fruteria
Route::get('fruteria', [FrutaController::class, 'index'])->name('fruteria');
Route::get('detalleFruta/{id}', [FrutaController::class, 'detalle'])->name('detalleFruta');
Route::get('crearFruta', [FrutaController::class, 'create'])->name('crearFruta');
Route::post('nueva', [FrutaController::class, 'store'])->name('nueva');
Route::get('editarFruta/{id}', [FrutaController::class, 'edit'])->name('editarFruta');
Route::put('update/{fruta}', [FrutaController::class, 'update'])->name('update');
Route::get('delete/{fruta}', [FrutaController::class, 'destroy'])->name('eliminarFruta');




Route::resource('usuario', UsuarioController::class);