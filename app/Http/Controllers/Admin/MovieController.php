<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(3);
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_request = $request->validate([
            'title' => 'required|max:70',
            'description' => 'required|max:2000',
            'year' => 'nullable',
            'facebook_page' => 'nullable',
            'instagram_page' => 'nullable',
            'twitter_page' => 'nullable',
            'website_page' => 'nullable',
            'directors' => 'nullable',
            'producers' => 'nullable',
            'cast' => 'nullable',
            'writers' => 'nullable',
            'genres' => 'nullable|max:70',
            'image_thumb' => 'required|max:700|active_url',
            'image_cover' => 'required|max:700|active_url',

        ]);
        Movie::create($validate_request);
        return redirect()->route('admin.movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validate_request = $request->validate([
            'title' => 'required|max:70',
            'description' => 'required|max:2000',
            'year' => 'nullable',
            'facebook_page' => 'nullable',
            'instagram_page' => 'nullable',
            'twitter_page' => 'nullable',
            'website_page' => 'nullable',
            'directors' => 'nullable',
            'producers' => 'nullable',
            'cast' => 'nullable',
            'writers' => 'nullable',
            'genres' => 'nullable|max:70',
            'image_thumb' => 'required|max:700|active_url',
            'image_cover' => 'required|max:700|active_url',

        ]);
        $movie->update($request->all());
        return redirect()->route('admin.movies.index')->with('messaggio', 'hai aggiornato il film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('messaggio', 'hai cancellato il film');
    }
}
