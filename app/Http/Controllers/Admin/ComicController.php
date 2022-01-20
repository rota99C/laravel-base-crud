<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* $validate_request = $request->validate([
            'title' => 'required|max:70',
            'description' => 'required|max:2000',
            'series' => 'nullable|max:70',
            'sale_date' => 'nullable',
            'type' => 'required|max:70',
            'price' => 'required|digits:4',
            'thumb' => 'required|max:700|active_url',
        ]); */
        /*  ddd($validate_request);
        Comic::create($validate_request); */
        /*  ddd($request); */
        $_comic = new Comic();
        $_comic->title = $request['title'];
        $_comic->description = $request['description'];
        $_comic->price = $request['price'];
        $_comic->series = $request['series'];
        $_comic->sale_date = $request['sale_date'];
        $_comic->type = $request['type'];
        $_comic->thumb = $request['thumb'];
        $_comic->save();

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        /* $validate_request = $request->validate([
            'title' => 'required|max:70',
            'description' => 'required|max:2000',
            'series' => 'nullable|max:70',
            'sale_date' => 'nullable',
            'type' => 'required|max:70',
            'price' => 'required|digits:4',
            'thumb' => 'required|max:700|active_url',
        ]); */
        $comic->update($request->all());
        return redirect()->route('admin.comics.index')->with('messaggio', 'hai aggiornato il fumetto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index')->with('messaggio', 'hai cancellato il fumetto');
    }
}
