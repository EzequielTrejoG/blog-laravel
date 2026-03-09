@extends('layouts.plantilla')

@section('title', 'Crear Post')

@section('content')
    <h1>Formulario para crear un nuevo Post</h1>

    {{-- @if ($errors->any())
        <div>
            <h2>Errores: </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Título:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Slug:</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug') }}">
        @error('slug')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>
        
        <label>Categoría:</label>
        <input type="text" name="category" id="category" value="{{ old('category') }}">
        @error('category')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>
        
        <label>Contenido:</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
        @error('content')
            <br><small style="color: red">{{ $message }}</small>
        @enderror
        <br><br>
        <button type="submit">Crear Post</button>
    </form>
@endsection