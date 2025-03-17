<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("pages/home");
})->name("home");

Route::resource("games", GameController::class);
Route::resource("genres", GenreController::class);
