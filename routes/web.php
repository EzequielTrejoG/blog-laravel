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
    
    $post = Post::find(1);

    //return $post->created_at->format('d-m-Y');
    //return $post->published_at->format('d-m-Y');
    //return $post->created_at->diffForHumans();
    //return $post->is_active;
    return dd($post->is_active);
});