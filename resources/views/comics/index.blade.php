<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco fumetti</title>
</head>
<body>

    <h1>Libreria fumetti</h1>
   
    @foreach ($comics as $comic)
        <p>
            <a href="{{ route('comics.show', $comic->id)}}">{{ $comic['title'] }}</a>
        </p>
    @endforeach
</body>
</html>