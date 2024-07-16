<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio fumetto</title>
    @vite('resources/js/app.js')
</head>
<body>
    
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}">Elenco</a>

</body>
</html>