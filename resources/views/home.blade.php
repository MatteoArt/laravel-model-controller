<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-model-controller</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <h1>Laravel db films</h1>

    <div class="container">
        <div class="card-container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->original_title }}</h2>
                    <h3>{{ $movie->title }}</h3>
                    <div>Nazione: <span class="bold">{{ $movie->nationality }}</span></div>
                    <div>Anno: <span class="bold">{{ $movie->date }}</span></div>
                    <div>Voto: <span class="bold red">{{ $movie->vote }}</span></div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>