<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/prueba', function () {
    $post = new Post;

    // ***** Crear Nuevo Registro ***** //
    $post->title ='TítuLO DE PRueBa 4';
    $post->content = 'Contenido de Prueba 4';
    $post->categoria = 'Ctaegoria de Prueba 4';

    $post->save();

    return $post;

    // ***** Actualizar Registros ***** //
    /*$post = Post::find(1);
    //$post = Post::where('id', 1)->first();

    $post->categoria = 'Desarrollo Web';
    $post->save();

    return $post;*/

    // ***** Consultar Registros ***** //
    //$posts = Post::all();
    //$posts = Post::where('id','>=', '2')->get();
    /*$posts = Post::select('title', 'content', 'categoria')
        ->orderBy('id', 'DESC')
        ->get();
    return $posts;*/

    /*$posts = Post::select()
        ->where('id', 1)
        ->get();
    
    return $posts;*/

    // ***** Eliminación de Registros ***** //
    $post = Post::find(5);
    $id = $post->id;

    $post->delete();

    return 'Registro con id ' . $id . ' eliminado';
});