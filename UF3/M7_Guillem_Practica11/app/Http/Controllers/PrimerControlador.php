<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function arrel(){
//    return 'Estem al metode arrel';
        return view('principal');
    }


//    public function hola($persona = ''){
//        $textoFinal = 'Hola, ';
//        $textoFinal .= ($persona == '')?'mundo':$persona;
//        return view('HolaMissatge') -> with(['text' => $textoFinal]);
//    }


    public function PruebaParametros($param1,$param2,$param3){

        $textoFinal = 'El primer parametre es igual a ' .$param1 .'. ';
        $textoFinal .= 'El segon parametre es igual a ' .$param2 .'. ';
        $textoFinal .= 'El tercer parametre es igual a ' .$param3 .'. ';

        return view('holaMissatge' ) -> with(['text' => $textoFinal]);


    }


}
