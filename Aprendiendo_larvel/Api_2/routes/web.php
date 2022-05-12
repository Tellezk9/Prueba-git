<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

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

Route::get('index', function(){
    return view('index');
})->name('index');


// Route::get('api', function(){
//     $client = new Client([
//         'base_url' => 'https://jsonplaceholder.typicode.com/',
//          'timeout' => 2.0,
//     ]);
//     try {
//         $response = $client->request('GET', 'users');
//         $posts = json_decode($response->getBody()->getContents(true));
//         dd($posts);
//         return view('api', compact('posts'));
//     } catch (ClientException $e) {
//         return "error... :v";
//     }
    
// })->name('api');


Route::get('api', function(){
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $response->body();
    $response->json();
    $data = json_decode($response);
    // dd($data);
    // dd(json_decode($response));
    return view('api', compact('data'));
})->name('api');