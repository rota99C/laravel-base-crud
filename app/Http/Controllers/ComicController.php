<?php



namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('index', compact('comics'));
    }
    public function show(Comic $comic)
    {
        /* $comics = Comic::all(); */
        return view('show', compact('comic'));
    }
}
