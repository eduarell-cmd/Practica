<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Pruebascontroller extends Controller
{
    public function Practica($value=0,$value1=0,$value2=0){
        $a= $value;
        $b= $value1;
        $c= $value2;
        return view('PE.Practica',[
        'a' => $a,
        'b' => $b,
        'c' => $c
    ]);
}
}