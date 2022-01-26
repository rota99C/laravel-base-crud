<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::paginate(10);
        $charactersAll = Character::all();
        return view('characters.index', compact('characters', 'charactersAll'));
    }
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }
}
