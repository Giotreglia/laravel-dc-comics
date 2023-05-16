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
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <a href="#" class="btn btn-primary">Dettagli</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection