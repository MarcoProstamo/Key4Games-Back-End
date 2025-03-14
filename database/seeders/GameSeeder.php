<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            [
                "title" => "The Last of Us Part II",
                "description" => "The Last of Us Part II is an action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment.",
                "developer" => "Naughty Dog",
                "publisher" => "Sony Interactive Entertainment",
                "genre_id" => 2 // Adventure
            ],
            [
                "title" => "Cyberpunk 2077",
                "description" => "Cyberpunk 2077 is an open-world RPG developed by CD Projekt Red.",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "genre_id" => 3 // RPG
            ],
            [
                "title" => "Call of Duty: Warzone",
                "description" => "Call of Duty: Warzone is a free-to-play battle royale game developed by Infinity Ward and Raven Software.",
                "developer" => "Infinity Ward, Raven Software",
                "publisher" => "Activision",
                "genre_id" => 10 // Battle Royale
            ],
            [
                "title" => "Dark Souls III",
                "description" => "Dark Souls III is an action RPG developed by FromSoftware and published by Bandai Namco Entertainment.",
                "developer" => "FromSoftware",
                "publisher" => "Bandai Namco Entertainment",
                "genre_id" => 3 // RPG
            ],
            [
                "title" => "League of Legends",
                "description" => "League of Legends is a competitive MOBA developed and published by Riot Games.",
                "developer" => "Riot Games",
                "publisher" => "Riot Games",
                "genre_id" => 11 // MOBA
            ],
            [
                "title" => "Resident Evil Village",
                "description" => "Resident Evil Village is a survival horror game developed and published by Capcom.",
                "developer" => "Capcom",
                "publisher" => "Capcom",
                "genre_id" => 27 // Horror
            ]
        ];

        foreach ($games as $game) {
            $newGame = new Game();
            $newGame->title = $game["title"];
            $newGame->description = $game["description"];
            $newGame->developer = $game["developer"];
            $newGame->publisher = $game["publisher"];
            $newGame->genre_id = $game["genre_id"];
            $newGame->save();
        }
    }
}
