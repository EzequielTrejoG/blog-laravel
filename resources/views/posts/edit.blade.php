@extends('layouts.plantilla')

@section('title', 'Editar Post')

@section('content')
    <h1>Formulario para editar Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Título:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br><br>
        <label>Categoría:</label>
        <input type="text" name="category" id="category" value="{{ $post->category }}">
        <br><br>
        <label>Contenido:</label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br><br>
        <button type="submit">Actualizar Post</button>
    </form>
@endsection