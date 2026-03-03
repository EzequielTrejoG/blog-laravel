<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/calificaciones/{matricula}', function ($matricula) {
    return 'Calificaciones de ' . $matricula;
});


Route::get('/edad/{edad}', function($edad) { 
    $mensaje = 'Tienes ' . $edad;

    return (($edad >= 18) ? $mensaje . ' y eres mayor de edad' : $mensaje . ' y eres menor de edad');
    
});