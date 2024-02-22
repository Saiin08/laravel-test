<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie-Request</title>
</head>
<body>
  <h1>Movie-Request List</h1>

  {{-- Here will be a new movie request form --}}
  {{-- movie_type_id(select),name(string),full-name(string),email(string) --}}
  <form action="" method="POST">
    
    
    <label for="movie_type_id">Movie-Type:</label><br>
    <select name="" id="">
    <option value="">Select movie type</option>
    @foreach ($movie_types as $type)
    <option value="{{$type->id}}">{{$type->name}}</option>
    @endforeach
    <br><br>
    </select> 
    <br><br>

    <label for="name">Name:  </label><br>
    <input type="text">
    <br><br>

    <label for="full_name">Full-Name:  </label><br>
    <input type="text">
    <br><br>

    <label for="email">Email:  </label><br>
    <input type="email" name="" id="">
    <br><br>

    <button type="submit">Submit 🫥</button>
  </form>

  <ul>
    @foreach ($movie_request as $request)
    <li>
      Movie-Name:{{$request->name}} <br>
      Full-Name:{{$request->full_name}} <br>
      Email:{{$request->email}} <br>
      <br>
    </li>   
    @endforeach
  </ul>
  
  {{dd($movie_request)}}
</body>
</html>