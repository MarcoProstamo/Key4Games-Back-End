<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view("/pages/genres/index", compact("genres"));
    }

    public function show(Genre $genre)
    {
        return view("/pages/genres/show", compact("genre"));
    }

    public function create()
    {
        return view("/pages/genres/create");
    }

    public function store(Request $request)
    {
        Genre::create($request->except('_token'));
        return redirect("/genres");
    }

    public function edit(Genre $genre)
    {
        return view("/pages/genres/edit", compact("genre"));
    }

    public function update(Request $request, Genre $genre)
    {
        $data = $request->except('_token');
        $genre->update($data);
        return redirect('/genres/' . $genre->id);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres');
    }
}
