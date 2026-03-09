@extends('layouts.plantilla')

@section('title', 'Crear Post')

@section('content')
    <h1>Formulario para crear un nuevo Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" id="title">
        <br><br>
        <label>Slug:</label>
        <input type="text" name="slug" id="slug">
        <br><br>
        <label>Categoría:</label>
        <input type="text" name="category" id="category">
        <br><br>
        <label>Contenido:</label>
        <textarea name="content" id="content"></textarea>
        <br><br>
        <button type="submit">Crear Post</button>
    </form>
@endsection