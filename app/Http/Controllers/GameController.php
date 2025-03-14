<?php

namespace App\Http\Controllers;

use App\Models\Game;
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
}
