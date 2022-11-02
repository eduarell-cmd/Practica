<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pruebascontroller;
Route::get('/', function () {
    return view('PE.plantilla');
});

Route::get('/practica/{v}/{b}/{c}', [Pruebascontroller::class,'Practica'])
->name('practica');