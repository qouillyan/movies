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

    <hr>

<form method="POST" action="/movies/{{ $movie->id }}/comments">

    @csrf

    <div class="mb-3">
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
    </div>

            <button type="submit">Submit</button>

        @error('content')             

            @include('partials.error')

        @enderror

</form>

@endsection('content')