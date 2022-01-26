<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::paginate(5);
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Character $character)
    {
        $validate_request = $request->validate([
            'name' => 'nullable|max:70',
            'description' => 'nullable|max:8000',
            'image_thumb' => 'nullable|max:700',
            'image_cover' => 'nullable|max:700',
            'powers' => 'nullable|max:500',
            'first_appearance' => 'nullable|max:100',
            'alter_ego' => 'nullable|max:70',
            'occupation' => 'nullable|max:70',
            'facebook_page' => 'nullable|max:700',
            'instagram_page' => 'nullable|max:700',
            'twitter_page' => 'nullable|max:700',
            'video_page' => 'nullable|max:700',
        ]);
        Character::create($validate_request);
        return redirect()->route('admin.characters.index');
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
    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        $validate_request = $request->validate([
            'name' => 'nullable|max:70',
            'description' => 'nullable|max:8000',
            'image_thumb' => 'nullable|max:700',
            'image_cover' => 'nullable|max:700',
            'powers' => 'nullable|max:500',
            'first_appearance' => 'nullable|max:100',
            'alter_ego' => 'nullable|max:70',
            'occupation' => 'nullable|max:70',
            'facebook_page' => 'nullable|max:700',
            'instagram_page' => 'nullable|max:700',
            'twitter_page' => 'nullable|max:700',
            'video_page' => 'nullable|max:700',
        ]);
        $character->update($request->all());
        return redirect()->route('admin.characters.index')->with('hai aggiornato il personaggio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('messaggio', 'hai cancellato il personaggio');
    }
}
