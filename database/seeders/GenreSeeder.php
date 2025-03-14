<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            "Action",
            "Adventure",
            "RPG",
            "Shooter",
            "Fighting",
            "Survival",
            "Stealth",
            "Platformer",
            "Metroidvania",
            "Battle Royale",
            "MOBA",
            "Hack and Slash",
            "Roguelike",
            "Strategy",
            "Turn-Based Strategy",
            "Real-Time Strategy",
            "Tower Defense",
            "City-Building",
            "Simulation",
            "Life Simulation",
            "Sports",
            "Racing",
            "Card Game",
            "Puzzle",
            "Rhythm",
            "Party Game",
            "Horror",
            "Visual Novel",
            "Interactive Story",
            "MMORPG"
        ];

        foreach ($genres as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            $newGenre->save();
        }
    }
}
