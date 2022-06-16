@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Description</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($comics as $comic)
            
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><img width="50" class="img-fluid" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td>View  Edit  Delete</td>
            </tr>
            @empty
            <tr>
                <td scope="row">No Comic to Show😪</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    

</div>
@endsection