@extends('layouts.plantilla')

@section('title', 'Ver Post')

@section('content')
    <a href="{{ route('posts.index') }}">Volver a Posts</a>
    <h1>Título: {{ $post->title }}</h1>
    <p>
        <b>Categoría: </b> {{ $post->category }}
    </p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post->id) }}">
        Editar Post
    </a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar Post</button>
    </form>
@endsection