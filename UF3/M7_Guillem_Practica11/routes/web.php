<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjercicio1;
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

Route::get('/ej1s1', [controladorEjercicio1::class, 'ej1s1']);
Route::get('/ej1s2/{menajeEj1}', [controladorEjercicio1::class, 'ej1s2']);
Route::get('/ej1s3/primeraView', [controladorEjercicio1::class, 'ej1s3']);
Route::get('/parametros/{param1}/{param2}/{param3}/{param4}',  [controladorEjercicio1::class, 'cuatroParametros']);
