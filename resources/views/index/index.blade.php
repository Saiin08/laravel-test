<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Movie Website</title>
</head>
<body>
     <h1>My Movie Website</h1>

    <p>Welcome to My Movie Website</p>

    <h1>Top 10 Movies</h1>

    <ul>
    @foreach ($movies as $movie)
        <li>Name:{{$movie->name}}</li>
        <li>Rating:{{$movie->rating}}</li>
        <li>Year:{{$movie->year}}</li><br><br>
    @endforeach
    </ul>
</body>
</html>
