<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view("/pages/games/index", compact("games"));
    }

    public function show(Game $game)
    {
        return view("/pages/games/show", compact("game"));
    }

    public function create()
    {
        $genres = Genre::all();
        return view("/pages/games/create", compact("genres"));
    }

    public function store(Request $request)
    {
        $game = Game::create($request->except('_token'));
        if ($request->has('genre_id')) $game->genres()->attach($request->input('genre_id'));
        return redirect("/games");
    }
}
