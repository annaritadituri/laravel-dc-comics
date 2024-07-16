@extends('layouts.app')

@section('main')
    <div class="show container my-5 text-center">
        
        <h1>{{ $comic->title }}</h1>
        <img class="border border-black border-3 mb-4" src="{{ $comic['thumb']}}" alt="copertina-fumetto">
        <p>{{ $comic->description }}</p>
        <a class="link-danger" href="{{ route('comics.index') }}">Torna all'elenco</a>

    </div>
@endsection