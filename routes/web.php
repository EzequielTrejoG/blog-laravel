<?php

use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, 'index']);
Route::get('/calificaciones/{matricula}', [CalificacionesController::class, 'verCalificaciones']);
Route::get('/edad/{edad}', [CalificacionesController::class, 'mayorEdad']);