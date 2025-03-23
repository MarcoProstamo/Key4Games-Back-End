<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameGenreSeeder extends Seeder
{
    public function run(): void
    {
        $games = Game::all();
        $gameGenreData = [];
        foreach ($games as $game) {
            $gameGenreData[] = [
                'game_id' => $game["id"],
                'genre_id' => $game['genre_id'],
                "created_at" => now()->format("Y-m-d H:i:s"),
                "updated_at" => now()->format("Y-m-d H:i:s"),
            ];
        }

        GameGenre::insert($gameGenreData);
    }
}
