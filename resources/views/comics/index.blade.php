<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco fumetti</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('shared.header')

    <div class="jumbo position-relative">
        <h1 class="text-center position-absolute top-50 start-50 translate-middle text-black">Libreria fumetti</h1>
        <h1 class="text-center position-absolute top-50 start-50 translate-middle text-white">Libreria fumetti</h1>
        <h1 class="text-center position-absolute top-50 start-50 translate-middle">Libreria fumetti</h1>
        <img class="w-100" src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2023/10/black-white-red.jpg" alt="copertina">
    </div>

    <div class="background pt-5">

        <div class="container text-center mb-5 py-4">
            <a class="link-danger fs-3 border border-secondary-subtle border-2 p-3 rounded shadow-lg" href="{{ route('comics.create') }}">Crea nuovo fumetto</a>
        </div>
    
        <div class="container px-5 pb-5">
            <div class="row gy-4">
                @foreach ($comics as $comic)

                    <div class="col-3">

                        <div class="content h-100 text-center">
                            <img class="w-100 border border-black border-2 mb-3 shadow" src="{{ $comic['thumb']}}" alt="copertina-fumetto">
                            <a class="fs-5 link-danger" href="{{ route('comics.show', $comic->id)}}">{{ $comic['title'] }}</a>
                            <div class="mt-2">
                                <a href="{{ route('comics.edit', $comic->id) }}"><button class="btn btn-outline-secondary">Modifica</button></a>
                                <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                @endforeach
            </div>
        </div>

    </div>

    @include('shared.footer')

</body>
</html>