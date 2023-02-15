<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function arrel(){
//    return 'Estem al metode arrel';
        return view('principal');
    }


    public function hola($persona = ''){
        $textoFinal = 'Hola, ';
        $textoFinal .= ($persona == '')?'mundo':$persona;
        return view('HolaMissatge') -> with(['text' => $textoFinal]);
    }


}
