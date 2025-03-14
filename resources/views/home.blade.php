<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Games List</title>
</head>

<body>
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
                        {{ $game['title'] }}
                    </div>
                    <div>
                        <button class="btn btn-warning fw-bold text-dark me-2">EDIT 🖋️</button>
                        <button class="btn btn-danger fw-bold text-dark">DELETE 🗑️</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
