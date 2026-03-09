<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

/*Route::get('/articles', [PostController::class, 'index'])->name('posts.index');
Route::get('/articles/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/articles/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/articles', [PostController::class, 'store'])->name('posts.store');
Route::get('/articles/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/articles/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/articles/{post}', [PostController::class, 'destroy'])->name('posts.destroy');*/

Route::resource('articles', PostController::class)->parameters(['articles' => 'post'])->names('posts');

//Route::apiResource('articles', PostController::class);

//Route::resource('articles', PostController::class)->except(['destroy', 'update']); //Solo para excluir destroy y update
//Route::resource('articles', PostController::class)->only(['index', 'create', 'store']); //Solo para incluir index, create y store
