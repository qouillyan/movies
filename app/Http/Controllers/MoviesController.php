<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }

    public function create()                            
    {
        return view('create');
    }

    public function store(StoreMovieRequest $request)                             
    {
        Movie::create([                                 
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'plot' => request('plot')
        ]);

        return redirect('/movies');
    }
}
