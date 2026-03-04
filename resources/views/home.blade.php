<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la página principal de Laravel</h1> --}}
        
        <!-- Componente de alerta (views.componentes.alert)--> 
        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                Título de la alerta.
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola Mundo</p>
    </div>
</body>
</html>