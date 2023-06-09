<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body style="background-color: #141414;">

    <h1 class="text-center my-3" style="color: #e50914;">Movies</h1>

    <div class="container d-flex flex-wrap mt-3">
        @foreach($movies as $movie)
        <div class="card p-2" style="width: calc((100% / 5) - 10px); margin:5px; color: white; background-color:#595959;">
            <h3 class="text-center">{{ $movie->title }}</h3>
            <div class="h-100 d-flex flex-column justify-content-end">
                <p>Titolo originale: {{ $movie->original_title }}</p>
                <p>Produzione: {{ $movie->nationality }}</p>
                <p>Anno: {{ \Carbon\Carbon::parse($movie->date)->year }}</p>
                <p>Voto: {{ $movie->vote }}</p>
            </div>

        </div>
        @endforeach
    </div>


</body>

</html>