@extends('layouts.app')

@section('page.title', 'DC Comics - Create')

@section('content')

    <form class="my-3" method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb_src" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="thumb_src" name="thumb_src" value="{{ $comic->thumb_src }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <button type="submit" class="btn btn-primary">Invia modifiche</button>
        <button type="reset" class="btn btn-warning">Annulla</button>
    </form>


    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
@endsection
