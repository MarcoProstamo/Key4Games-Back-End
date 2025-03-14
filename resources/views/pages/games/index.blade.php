@extends('layouts/layout')

@section('title', 'Games List')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">GAMES LIST</h1>
        <div class="list-group">
            <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    New Game Title...
                </div>
                <div>
                    <button class="btn btn-success fw-bold text-light px-4 me-5">ADD ➕</button>
                </div>
            </div>
            @foreach ($games as $game)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <a href="games/{{ $game['id'] }}" class="text-decoration-none">
                            {{ $game['title'] }}
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-warning fw-bold text-dark me-2">EDIT 🖋️</button>
                        <button class="btn btn-danger fw-bold text-dark">DELETE 🗑️</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
