<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Movies</h1>
    </div>

    <div class="row">
        @foreach($movies as $movie)
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</body>

</html>