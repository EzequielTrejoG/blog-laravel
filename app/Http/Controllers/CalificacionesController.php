<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function verCalificaciones($matricula) 
    {
        return 'Calificaciones de ' . $matricula;
    }

    public function mayorEdad($edad)
    {
        $mensaje = 'Tienes ' . $edad . ' años. ';

        return (($edad < 18) ? $mensaje . ' Y eres menor de edad' : $mensaje . ' Y eres mayor de edad');
    }
}
