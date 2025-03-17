<?php

use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\GenreController;
use Illuminate\Support\Facades\Route;

Route::resource("/games", GameController::class);
Route::resource("/genres", GenreController::class);
