@extends('layouts.app')

@section('page.title', 'DC Comics - Show')

@section('content')

    <div class="d-flex my-3">
        <div class="card mb-3 flex-row">
            <img src="{{ $comic->thumb_src }}" class="h-100 w-50" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price: {{ $comic->price }}</li>
                    <li class="list-group-item">Series: {{ $comic->series }}</li>
                    <li class="list-group-item">Sale date: {{ $comic->sale_date }}</li>
                    <li class="list-group-item">Type: {{ $comic->type }}</li>
                </ul>
            </div>
        </div>
    </div>

    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modifica</a>

@endsection
