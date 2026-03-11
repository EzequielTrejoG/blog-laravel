<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    /* protected $fillable = [
        'title',
        'slug',
        'category',
        'content'
    ]; */

    protected $guarded = [
        'is_active'
    ];

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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Función para generar el slug automáticamente a partir del título
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

}
