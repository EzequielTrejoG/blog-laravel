@extends('layouts.plantilla')

@section('title', 'Editar Post')

@section('content')
    <h1>Formulario para editar Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Título:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>
        
        <label>Slug:</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Categoría:</label>
        <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">
        @error('category')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Contenido:</label>
        <textarea name="content" id="content">{{ old('content', $post->content) }}</textarea>
        <br><br>
        @error('content')
            <br><small style="color: red">{{ $message }}</small>
        @enderror

        <button type="submit">Actualizar Post</button>
    </form>
@endsection