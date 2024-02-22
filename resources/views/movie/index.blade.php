<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($movies as $movie)
        <li>
            <strong>{{$movie->name}}</strong>
            <br>
            {{$movie->movieType->name}}
            <br>
            {{$movie->genres->pluck('name')->join(' | ')}}
            <br>
            @if ($movie->people)
                @foreach($movie->people as $person)
                    {{$person->fullname}}
                @endforeach
            @else
                No people associated with this movie.
            @endif
        </li>
        @endforeach
    </ul>
</body>
</html>