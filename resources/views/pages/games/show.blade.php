@extends('layouts/layout')

@section('title', 'Choose Game')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">CHOOSE GAME</h1>
        <ul>
            <li>{{ $game['title'] }}</li>
            <li>{{ $game['description'] }}</li>
            <li>{{ $game['developer'] }}</li>
            <li>{{ $game['publisher'] }}</li>
            <li>{{ $game->genres->first()->name }}</li>
        </ul>
        <a href="/games" class="btn btn-secondary">Back to Games</a>
    </div>
@endsection
