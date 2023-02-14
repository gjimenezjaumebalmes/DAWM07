<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function arrel(){
//    return 'Estem al metode arrel';
        return view('principal');
    }

    public function hola(){
//        return 'Estem al metode hola';
        return view('holaMissatge') -> with(['text' => 'Hello World']);
    }
}
