<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('principal');
});

Route::get('/hola', function () {
    return view('holaMissatge');
});

Route::get('/', [PrimerControlador::class, 'arrel']); // Ruta per arrel
Route::get('/hola', [PrimerControlador::class, 'hola']); // Ruta per hola
Route::get('/hola/{persona?}',[PrimerControlador::class, 'hola']); // Ruta per hola - Nom

Route::get('/parametros/{param1}/{param2}/{param3}/',[PrimerControlador::class, 'PruebaParametros']); // Ruta per hola - Nom

