<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $genre = Genre::create(attributes: $data);
        return response()->json($genre);
    }

    public function show(Genre $genre)
    {
        return response()->json($genre);
    }

    public function update(Request $request, Genre $genre)
    {
        $data = $request->all();
        $genre->update(attributes: $data);
        return response()->json($genre);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response()->json("Deleted Successfully");
    }
}
