@extends('layouts.app')

@section('content')

<div class="container">
@include('partials.errors')
    <h1>Edit {{ $comic->title}}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="post">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Batman" aria-describedby="titleHelpId" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb:</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://picsum.photos/300/200" aria-describedby="thumbHelpId" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder=" Batman - new order" aria-describedby="seriesHelpId" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="date" name="sale_date" id="saleDate" class="form-control @error('sale_date') is-invalid @enderror" placeholder="15/12/1998" aria-describedby="saleDateHelpId" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Comic" aria-describedby="typeHelpId" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="35" aria-describedby="priceHelpId" value="{{$comic->price}}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{$comic->title}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Comic</button>
        
    </form>
</div>

@endsection