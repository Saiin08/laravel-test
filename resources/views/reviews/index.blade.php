<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie-review</title>
</head>
<body>
  <h1>Movie-review</h1>
  <form action="{{route('movie.review',$movie->id)}}" method="POST">
    @csrf

    <label for="text">Text:</label><br>

    @foreach ($movie->review as $review)
    <textarea name="text" cols="30" rows="10">{{$review-text}}</textarea><br><br>
    @endforeach

    <button type="submit">Submit 🫥</button>

  </form>
</body>
</html>