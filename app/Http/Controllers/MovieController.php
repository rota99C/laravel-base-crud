<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(10);
        $moviesAll = Movie::all();
        return view('movies.index', compact('movies', 'moviesAll'));
    }
    public function show(Movie $movie)
    {
        /* $comics = Comic::all(); */
        return view('movies.show', compact('movie'));
    }
}
