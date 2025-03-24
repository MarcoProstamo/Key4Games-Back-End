@extends('layouts/layout')

@section('title', 'Create a Game')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">CREATE A NEW GAME</h1>
        <form action="/games" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="developer" name="developer" placeholder="Developer">
                <label for="developer">Developer</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Publisher">
                <label for="publisher">Publisher</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="price" name="price" placeholder="price" min=0>
                <label for="price">Price</label>
            </div>

            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" id="description" placeholder="Description"></textarea>
                <label for="description">Description</label>
            </div>

            <div class="mb-3">
                <select name="genre_id" class="form-select">
                    <option selected>Select a Genre...</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="/games" class="btn btn-danger fw-semibold">Back to Games</a>
                <button type="submit" class="btn btn-success fw-semibold">CREATE</button>
            </div>
        </form>
    </div>
@endsection
