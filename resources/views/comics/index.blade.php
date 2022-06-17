@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Thumb</th>
                <th>Title</th>
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
                <td>{{Str::limit($comic->title,50)}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td>

                    <button type="button" class="btn btn-primary">
                        <a class="text-white text-decoration-none" href="{{route('comics.show', $comic->id)}}">View</a>
                    </button>
                    <button type="button" class="btn btn-primary">

                        <a class="text-white text-decoration-none" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                    </button>



                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete-comic-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-comic{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete {{$comic->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this comic?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </td>
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