@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Add New Comic</h1>
    <form action="{{route('comics.store')}}" method="post">
    @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelpId">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb:</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://picsum.photos/300/200" aria-describedby="thumbHelpId">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" name="series" id="series" class="form-control" placeholder=" Batman - new order" aria-describedby="seriesHelpId">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="date" name="sale_date" id="saleDate" class="form-control" placeholder="15/12/1998" aria-describedby="saleDateHelpId">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic" aria-describedby="typeHelpId">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="35" aria-describedby="priceHelpId">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add New Comic</button>
        
    </form>
</div>

@endsection