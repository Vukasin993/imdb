@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    
    @foreach ($movies as $movie)
    <div class="alert alert-primary">
        <a href="#">{{$movie->title}}</a>
        <div>{{$movie->storyline}}</div>
    </div>
    @endforeach
   
@endsection
