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
                "title" => "League of Legends",
                "description" => "A competitive MOBA developed and published by Riot Games.",
                "developer" => "Riot Games",
                "publisher" => "Riot Games",
                "genre_id" => 10, // MOBA
                "price" => "10 years",
                "image" => null
            ],
            [
                "title" => "The Last of Us Part II",
                "description" => "An action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment.",
                "developer" => "Naughty Dog",
                "publisher" => "Sony Interactive Entertainment",
                "genre_id" => 1, // Action
                "price" => 39.99,
                "image" => null
            ],
            [
                "title" => "Cyberpunk 2077",
                "description" => "An open-world RPG developed by CD Projekt Red.",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "genre_id" => 3, // RPG
                "price" => 29.99,
                "image" => null
            ],
            [
                "title" => "Call of Duty: Warzone",
                "description" => "A battle royale shooter developed by Infinity Ward and Raven Software.",
                "developer" => "Infinity Ward, Raven Software",
                "publisher" => "Activision",
                "genre_id" => 9, // Battle Royale
                "price" => 49.99,
                "image" => null
            ],
            [
                "title" => "Dark Souls III",
                "description" => "An action RPG developed by FromSoftware and published by Bandai Namco Entertainment.",
                "developer" => "FromSoftware",
                "publisher" => "Bandai Namco Entertainment",
                "genre_id" => 3, // RPG
                "price" => 19.99,
                "image" => null
            ],
            [
                "title" => "Resident Evil Village",
                "description" => "A survival horror game developed and published by Capcom.",
                "developer" => "Capcom",
                "publisher" => "Capcom",
                "genre_id" => 6, // Survival
                "price" => 34.99,
                "image" => null
            ],
            [
                "title" => "Elden Ring",
                "description" => "An action RPG by FromSoftware, directed by Hidetaka Miyazaki and with world-building by George R. R. Martin.",
                "developer" => "FromSoftware",
                "publisher" => "Bandai Namco Entertainment",
                "genre_id" => 3, // RPG
                "price" => 44.99,
                "image" => null
            ],
            [
                "title" => "God of War Ragnarok",
                "description" => "The sequel to God of War (2018), following Kratos and Atreus in Norse mythology.",
                "developer" => "Santa Monica Studio",
                "publisher" => "Sony Interactive Entertainment",
                "genre_id" => 1, // Action
                "price" => 59.99,
                "image" => null
            ],
            [
                "title" => "Hollow Knight",
                "description" => "A Metroidvania-style action-adventure game developed by Team Cherry.",
                "developer" => "Team Cherry",
                "publisher" => "Team Cherry",
                "genre_id" => 8, // Metroidvania
                "price" => 14.99,
                "image" => null
            ],
            [
                "title" => "Red Dead Redemption 2",
                "description" => "An open-world action-adventure game set in the Wild West, developed by Rockstar Games.",
                "developer" => "Rockstar Games",
                "publisher" => "Rockstar Games",
                "genre_id" => 2, // Adventure
                "price" => 39.99,
                "image" => null
            ],
            [
                "title" => "Minecraft",
                "description" => "A sandbox game where players can build and explore infinite worlds, developed by Mojang Studios.",
                "developer" => "Mojang Studios",
                "publisher" => "Microsoft",
                "genre_id" => 19, // Simulation
                "price" => 26.95,
                "image" => null
            ],
            [
                "title" => "The Witcher 3: Wild Hunt",
                "description" => "An open-world action RPG by CD Projekt Red, following the story of Geralt of Rivia.",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "genre_id" => 3, // RPG
                "price" => 24.99,
                "image" => null
            ],
            [
                "title" => "Super Mario Odyssey",
                "description" => "A 3D platformer featuring Mario exploring various kingdoms with his sentient hat, Cappy.",
                "developer" => "Nintendo",
                "publisher" => "Nintendo",
                "genre_id" => 7, // Platformer
                "price" => 49.99,
                "image" => null
            ],
            [
                "title" => "FIFA 23",
                "description" => "A football simulation game developed by EA Sports.",
                "developer" => "EA Sports",
                "publisher" => "Electronic Arts",
                "genre_id" => 21, // Sports
                "price" => 59.99,
                "image" => null
            ],
            [
                "title" => "Bloodborne",
                "description" => "A dark action RPG by FromSoftware, featuring gothic horror and challenging combat.",
                "developer" => "FromSoftware",
                "publisher" => "Sony Interactive Entertainment",
                "genre_id" => 3, // RPG
                "price" => 19.99,
                "image" => null
            ]
        ];


        foreach ($games as $game) {
            $newGame = new Game();
            $newGame->title = $game["title"];
            $newGame->description = $game["description"];
            $newGame->developer = $game["developer"];
            $newGame->publisher = $game["publisher"];
            $newGame->genre_id = $game["genre_id"];
            $newGame->price = $game["price"];
            $newGame->image = $game["image"];
            $newGame->save();
        }
    }
}
