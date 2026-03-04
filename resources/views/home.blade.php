<!--<x-app-layout>-->
@extends('layouts.plantilla')

@section('title', 'Laravel 12')

@push('css')
    <style>
        body {
            background-color: #f3f3f3;
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la página principal de Laravel</h1> --}}

        <!-- Componente de alerta (views.componentes.alert)-->
        <x-alert2 type="success" class="mb-4">
            <x-slot name="title">
                Título de la alerta.
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola Mundo</p>
    </div>
@endsection
<!--</x-app-layout>-->