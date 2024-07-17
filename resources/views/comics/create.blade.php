@extends('layouts.app')

@section('main')
    <div class="container my-5">

        <h1 class="text-center my-5">NUOVO FUMETTO</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('title')) is-invalid @endif"
                    id="title"
                    name="title"
                >
                @if ($errors->get('title'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('title') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                    class="form-control @if ($errors->get('description')) is-invalid @endif"
                    id="description"
                    rows="3"
                    name="description"
                ></textarea>
                @if ($errors->get('description'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('description') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('thumb')) is-invalid @endif"
                    id="image"
                    name="thumb"
                >
                @if ($errors->get('thumb'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('thumb') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="number"
                    class="form-control @if ($errors->get('price')) is-invalid @endif"
                    id="price"
                    name="price"
                >
                @if ($errors->get('price'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('price') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('series')) is-invalid @endif"
                    id="series"
                    name="series"
                >
                @if ($errors->get('series'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('series') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('sale_date')) is-invalid @endif"
                    id="sale_date"
                    name="sale_date"
                >
                @if ($errors->get('sale_date'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('sale_date') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('type')) is-invalid @endif"
                    id="type"
                    name="type"
                >
                @if ($errors->get('type'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('type') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea
                    class="form-control @if ($errors->get('artists')) is-invalid @endif"
                    id="artists"
                    rows="3"
                    name="artists"
                ></textarea>
                @if ($errors->get('artists'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('artists') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea
                    class="form-control @if ($errors->get('writers')) is-invalid @endif"
                    id="writers"
                    rows="3"
                    name="writers"
                ></textarea>
                @if ($errors->get('writers'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('writers') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-danger mb-3">CREA</button>
        </form>

    </div>
@endsection