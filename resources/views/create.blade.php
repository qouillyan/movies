@extends('layouts.master')

@section('title', 'Add a Movie')

@section('content')

<h1>Add a Movie</h1>

<form method="POST" action="/movies">

        @csrf

        <div class="mb-3">
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title"><br>
        <input type="text" name="genre" class="form-control" id="exampleFormControlInput1" placeholder="Genre"><br>
        <input type="text" name="director" class="form-control" id="exampleFormControlInput1" placeholder="Director"><br>
        <input type="date" name="year" class="form-control" id="exampleFormControlInput1" placeholder="Year"><br>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title"><br>
        <input type="text" name="plot" class="form-control" id="exampleFormControlInput1" placeholder="Plot">
        </div>

        @error('title')             

            @include('partials.error')

        @enderror

        <button type="submit">Submit</button>

    </form>

        <br>

@endsection('content')