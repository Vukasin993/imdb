@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    
    @foreach ($movies as $movie)
    <div class="alert alert-primary">
        <h3>{{$movie->title}}</h3>
        <div>{{$movie->storyline}}</div>
    </div>
    @endforeach
   
@endsection
