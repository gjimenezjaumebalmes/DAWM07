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

Route::get('/', [PrimerControlador::class, 'arrel']);
Route::get('/hola', [PrimerControlador::class, 'hola']);

