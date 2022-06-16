@extends('layouts.app')

@section('content')
<div class="container">
    <div class="comic">
        <h1>{{$comic->title}}</h1>
        <div class="cover">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="details">
            <p>{{$comic->description}}</p>
        </div>
    </div>
</div>

@endsection