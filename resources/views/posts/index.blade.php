@extends('layouts.plantilla')

@section('title', 'Listado de POSTS')

@section('content')
    <h1 class="text-2xl">Aquí se mostrarán todos los posts de la página</h1>

    <a href="{{ route('posts.create') }}">Nuevo Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }} <!-- Agrega paginación -->

@endsection