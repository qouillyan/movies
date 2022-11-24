@extends('layouts.master')

@section('title', 'Movies')

@section('content')

<h1>MOVIES</h1>

@foreach($movies as $movie)

<h3>
    <ul>
        <li><a href="{{ route('single-movie', ['id' => $movie->id]) }}">
            {{ $movie->title }}
        </a></li>
    </ul>
</h3>
    
@endforeach

@endsection('content')