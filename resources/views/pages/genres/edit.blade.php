@extends('layouts/layout')

@section('title', 'Edit Genre')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">EDIT GENRE</h1>
        <form action="/genres/{{ $genre->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="name"
                    value="{{ $genre['name'] }}">
                <label for="name">Name</label>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="/genres" class="btn btn-danger fw-semibold">Back to Genres</a>
                <button type="submit" class="btn btn-warning fw-semibold">EDIT</button>
            </div>
        </form>
    </div>
@endsection
