@extends('layouts.app')

@section('page-title')
    Aggiungi un Fumetto
@endsection

@section('content')

    <div class="container">

        <form method="POST" action="{{route('comics.update', ['comic' => $comic->id])}}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="thumb" class="form-label">Url dell'immagine:</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia:</label>
                <input type="text" class="form-control" id="Type" name="Type" value="{{ old('type', $comic->type) }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" >{{old('description', $comic->description)}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Salva</button>
        </form>

    </div>

@endsection