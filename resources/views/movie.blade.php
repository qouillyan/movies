@extends('layouts.master')

@section('title', $movie->title)

@section('content')

<h3>{{ $movie->title }}</h3>

<p> Genre: {{ $movie->genre }}</p>
<p> Year: {{ $movie->year }}</p>
<p> Director: {{ $movie->director }}</p>

<p>{{ $movie->plot }}</p>

@endsection('content')