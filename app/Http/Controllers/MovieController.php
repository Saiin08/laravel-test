<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\MovieType;

use Illuminate\Http\Request;

class MovieController extends Controller
{
       public function index()
    {
        $movies = Movie::orderBy('name', 'asc')
        ->where('name', '!=', '')
        ->where('votes_nr', '>=', 400000)
        ->limit(10)
        ->get();
        return view('movie.index', compact('movies'));
    }

    public function games() {
        $game_type = MovieType::where('name', 'game')->first();
        $game_type->movies;
    }
}
