<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $game = Game::create(attributes: $data);
        if ($request->has('genre_id')) $game->genres()->attach($request->input('genre_id'));
        return response()->json($game);
    }

    public function show(Game $game)
    {
        return response()->json($game);
    }

    public function update(Request $request, Game $game)
    {
        $data = $request->all();
        $game->update(attributes: $data);
        if ($request->has('genre_id')) {
            $game->genres()->detach();
            $game->genres()->attach($request->input('genre_id'));
            $game->genres()->sync($request->input('genre_id'));
        }
        return response()->json($game);
    }

    public function destroy(Game $game)
    {
        $game->genres()->detach();
        $game->delete();
        return response()->json("Deleted Successfully");
    }
}
