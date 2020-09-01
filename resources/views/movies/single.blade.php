@extends('layouts.app')

@section('title', 'Movie')

@section('content')
    <div>
        <h1>{{$title}}</h1>
        <p>{{$storyline}}</p>
        <h5>{{$year}}</h5>
        <h5>{{$director}}</h5>
        <h5>{{$genre}}</h5>

        <hr />
    </div>

@endsection