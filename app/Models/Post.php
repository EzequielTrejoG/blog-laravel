<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    protected $table = 'posts';

    //Función para convertir el campo published_at a un objeto fecha y hora
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    //Función para modificar el valor del campo title antes de guardarlo en la base de datos
    protected function title(): Attribute
    {
        return Attribute::make(
            //Mutador
            set: function ($value) 
            {
                //return strtolower($value); //Convertir a minúscula todo el texto
                return ucfirst(strtolower($value)); //Convertir a minúscula todo el texto y la primera letra en mayúscula
            }/*,
            //Accesor
            get: function ($value) 
            {
                return ucfirst($value); //Primera letra en mayúscula
            }*/
        );
    }

}
