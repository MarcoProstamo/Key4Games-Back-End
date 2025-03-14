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
                    <a href="games/create" class="btn btn-success fw-bold text-light px-4 me-5">ADD ➕</a>
                </div>
            </div>
            @foreach ($games as $game)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <a href="games/{{ $game['id'] }}" class="text-decoration-none">
                            {{ $game['title'] }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <a href="games/{{ $game['id'] }}/edit" class="btn btn-warning fw-bold text-dark">EDIT 🖋️</a>
                        <form action="games/{{ $game['id'] }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger fw-bold text-dark">DELETE 🗑️</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
