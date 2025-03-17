@extends('layouts/layout')

@section('title', 'Create a Genre')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">CREATE A NEW GENRE</h1>
        <form action="/genres" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                <label for="name">Name</label>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="/genres" class="btn btn-danger fw-semibold">Back to Genres</a>
                <button type="submit" class="btn btn-success fw-semibold">CREATE</button>
            </div>
        </form>
    </div>
@endsection
