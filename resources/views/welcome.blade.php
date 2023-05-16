@extends('layouts.app')

@section('page-title', 'DC Comics- Home')
    
@section('content')

<div class="row">
    @forelse ($comics as $comic)
        
    <div class="col-3">
        <div class="card">
            <img src="{{$comic->thumb_src}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Price {{$comic->price}}</li>
              <li class="list-group-item">{{$comic->series}}</li>
              <li class="list-group-item">{{$comic->sale_date}}</li>
              <li class="list-group-item">{{$comic->type}}</li>
            </ul>
          </div>
    </div>

    @empty
        <div class="alert alert-danger" role="alert">
            Nessun risultato
        </div>
    @endforelse

</div>
    
@endsection