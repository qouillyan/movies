@extends('layouts.master')

@section('title', $movie->title)

@section('content')

<h3>{{ $movie->title }}</h3>

<p> Genre: {{ $movie->genre }}</p>
<p> Year: {{ $movie->year }}</p>
<p> Director: {{ $movie->director }}</p>

<p>{{ $movie->plot }}</p>

<div>
        <h4>Comments</h4>

        <ul>
            @foreach ($movie->comments as $comment)
                <li>[{{ $comment->created_at }}]: {{ $comment->content }}</li>
            @endforeach
        </ul>
</div>

@endsection('content')