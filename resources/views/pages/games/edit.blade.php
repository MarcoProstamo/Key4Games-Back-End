@extends('layouts/layout')

@section('title', 'Edit Game')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">EDIT GAME DETAILS</h1>
        <form action="/games/{{ $game->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                    value="{{ $game['title'] }}">
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="developer" name="developer" placeholder="Developer"
                    value="{{ $game['developer'] }}">
                <label for="developer">Developer</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Publisher"
                    value="{{ $game['publisher'] }}">
                <label for="publisher">Publisher</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="price" name="price" placeholder="price"
                    value="{{ $game['price'] }}">
                <label for="price">Price</label>
            </div>

            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" id="description" placeholder="Description">{{ $game['description'] }}</textarea>
                <label for="description">Description</label>
            </div>

            <div class="mb-3">
                <select name="genre_id" class="form-select">
                    <option>Select a Genre...</option>
                    @foreach ($genres as $genre)
                        @if ($genre->id === $game->genres->first()->id)
                            <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                        @else
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="/games" class="btn btn-danger fw-semibold">Back to Games</a>
                <button type="submit" class="btn btn-warning fw-semibold">EDIT</button>
            </div>
        </form>
    </div>
@endsection
