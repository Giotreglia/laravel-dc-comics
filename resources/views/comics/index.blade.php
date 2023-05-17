@extends('layouts.app')

@section('page.title', 'DC Comics - Admin')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->type }}</td>
                    <td class="d-flex gap-1 justify-content-end">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" value="Cancella">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" class="btn btn-success">Crea nuovo elemento</a>
@endsection
