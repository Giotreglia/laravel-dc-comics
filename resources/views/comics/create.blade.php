@extends('layouts.app')

@section('page.title', 'DC Comics - Create')
    
@section('content')

<form class="my-3" method="POST" action="{{route('comics.store')}}">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea type="text" class="form-control" id="description" name="description">
        </textarea>
    </div>
    <div class="mb-3">
        <label for="thumb_src" class="form-label">Thumb source Url</label>
        <input type="text" class="form-control" id="thumb_src" name="thumb_src">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


  <a href="{{route('comics.index')}}" class="btn btn-success">Torna alla lista</a>
@endsection