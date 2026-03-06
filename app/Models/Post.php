<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    protected $table = 'posts';

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) 
            {
                //return strtolower($value); //Convertir a minúscula todo el texto
                return ucfirst(strtolower($value)); //Convertir a minúscula todo el texto y la primera letra en mayúscula
            }/*,
            get: function ($value) 
            {
                return ucfirst($value); //Primera letra en mayúscula
            }*/
        );
    }

}
