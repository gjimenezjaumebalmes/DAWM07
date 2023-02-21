<?php

namespace App\Http\Controllers;

class controladorEjercicio1 extends Controller
{
    public function ej1s1()
    {
        return 'Hola MUNDO';
    }
    public function ej1s2($mensajeEj1)
    {
        return $mensajeEj1;
    }
    public function ej1s3()
    {
        $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por ';
        return view('mensaje')->with(['text' => $textoFinal]);
    }
    public function cuatroParametros($param1, $param2, $param3, $param4)
    {
        $textoFinal = 'El primer parámetro és igual a ' . '"'. $param1 . '" . ';
        $textoFinal .= 'El segundo parámetro és igual a ' . '"'. $param2 . '". ';
        $textoFinal .= 'El tercer parámetro és igual a ' .'"'. $param3 . '". ';
        $textoFinal .= 'El tercer parámetro és igual a ' .'"'. $param4 . '". ';

        return view('mensaje')->with(['text' => $textoFinal]);
    }
}
