@extends('layouts.plantilla')

@section('title', 'Crear Post')

@section('content')
    <a href="/posts">Volver a Posts</a>
    <h1>Título: {{ $post->title }}</h1>
    <p>
        <b>Categoría: </b> {{ $post->category }}
    </p>
    <p>{{ $post->content }}</p>

    <a href="/posts/{{ $post->id }}/edit">
        Editar Post
    </a>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar Post</button>
    </form>
@endsection