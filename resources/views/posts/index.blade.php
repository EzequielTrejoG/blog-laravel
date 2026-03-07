@extends('layouts.plantilla')

@section('title', 'Listado de POSTS')

@section('content')
    <h1>Aquí se mostrarán todos los posts de la página</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection