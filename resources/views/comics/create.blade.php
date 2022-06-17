@extends('layouts.app')

@section('content')



<div class="container">

    <h1>Add New Comic</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Batman" aria-describedby="titleHelpId" value="{{ old('title') }}">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb:</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://picsum.photos/300/200" aria-describedby="thumbHelpId">
        </div>
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder=" Batman - new order" aria-describedby="seriesHelpId">
        </div>
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="date" name="sale_date" id="saleDate" class="form-control @error('sale_date') is-invalid @enderror" placeholder="15/12/1998" aria-describedby="saleDateHelpId">
        </div>
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Comic" aria-describedby="typeHelpId">
        </div>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="35" aria-describedby="priceHelpId">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"></textarea>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Add New Comic</button>

    </form>


    @include('partials.errors')
</div>

@endsection