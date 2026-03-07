<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel 1')</title>
    <!--<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>-->
    <!--@stack('css')-->
</head>
<body>

    <header></header>

    {{-- Aquí va el contenido variable que se inyecta desde la vista que extiende este layout --}}
    @yield('content')

    <footer></footer>
</body>
</html>