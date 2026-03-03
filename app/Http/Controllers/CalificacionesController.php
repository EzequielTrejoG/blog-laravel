<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function verCalificaciones($matricula) {
        return 'Calificaciones de ' . $matricula;
    }
}
