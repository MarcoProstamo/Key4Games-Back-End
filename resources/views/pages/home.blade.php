@extends ("layouts/layout")

@section('title', 'Make your Choice!')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">What do you want to Manage today?</h1>

        <div class="d-flex justify-content-center gap-5 mt-5 fs-1">
            <a class="text-decoration-none" href="./games">Games!</a>
            <a class="text-decoration-none" href="./genres">Genres!</a>
        </div>
    </div>
@endsection
