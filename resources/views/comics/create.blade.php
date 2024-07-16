@extends('layouts.app')

@section('main')
    <div class="container my-5">

        <h1 class="text-center my-5">NUOVO FUMETTO</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control" id="artists" rows="3" name="artists"></textarea>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control" id="writers" rows="3" name="writers"></textarea>
            </div>
            <button type="submit" class="btn btn-danger mb-3">CREA</button>
        </form>

    </div>
@endsection