<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Posts</title>
</head>
<body>
    <a href="/posts">Volver a Posts</a>
    <h1>Título: {{ $post->title }}</h1>
    <p>
        <b>Categoría: </b> {{ $post->category }}
    </p>
    <p>{{ $post->content }}</p>

</body>
</html>