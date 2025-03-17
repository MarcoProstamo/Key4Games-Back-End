@extends('layouts/layout')

@section('title', 'Choose Genre')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3 fw-semibold">THE CHOOSEN ONE</h1>
        <ul>
            <li>{{ $genre['name'] }}</li>
        </ul>
        <a href="/genres" class="btn btn-secondary">Back to Genres</a>
    </div>
@endsection
