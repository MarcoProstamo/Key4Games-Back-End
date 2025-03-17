@extends('layouts/layout')

@section('title', 'Genres List')

@section('content')
    <div class="container my-5">
        <div class="mb-3 d-flex align-items-center">
            <div class="col-5">
                <a class="btn btn-secondary fw-semibold" href="/">Back to Homepage</a>
            </div>
            <div class="col-6">
                <span class="fw-semibold h1">GENRES LIST</span>
            </div>
        </div>
        <div class="list-group">
            <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    New Genre Name...
                </div>
                <div>
                    <a href="genres/create" class="btn btn-success fw-bold text-light px-4 me-5">ADD ➕</a>
                </div>
            </div>
            @foreach ($genres as $genre)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <a href="genres/{{ $genre['id'] }}" class="text-decoration-none">
                            {{ $genre['name'] }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <a href="genres/{{ $genre['id'] }}/edit" class="btn btn-warning fw-bold text-dark">EDIT 🖋️</a>
                        <button type="button" class="btn btn-danger text-dark" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            DELETE 🗑️
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting a Record!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this record?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <form action="genres/{{ $genre['id'] }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger fw-bold text-dark">DELETE 🗑️</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
