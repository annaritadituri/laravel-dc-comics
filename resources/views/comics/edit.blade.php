<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control" id="artists" rows="3" name="artists">{{ old('artists', $comic->artists) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control" id="writers" rows="3" name="writers">{{ old('writers', $comic->writers) }}</textarea>
            </div>
            <button type="submit" class="btn btn-danger mb-3">CREA</button>
        </form>
    </div>
    
</body>
</html>