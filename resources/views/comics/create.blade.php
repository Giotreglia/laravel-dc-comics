@extends('layouts.app')

@section('page.title', 'DC Comics - Create')

@section('content')

    <form class="my-3" method="POST" action="{{ route('comics.store') }}">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('src') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                name="description">
                {{ old('description') }}
            </textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb_src" class="form-label">Url immagine</label>
            <input type="text" class="form-control @error('thumb_src') is-invalid @enderror" id="thumb_src"
                name="thumb_src" value="{{ old('thumb_src') }}">
            @error('thumb_src')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-warning">Annulla</button>
    </form>


    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
@endsection
