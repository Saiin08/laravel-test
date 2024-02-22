<?php

namespace App\Http\Controllers;

use App\Models\MovieRequest;
use App\Models\MovieType;
use Illuminate\Http\Request;

class MovieRequestController extends Controller
{
    public function index(Request $request){
        //
        // $limit= $request->input('limit');
        $search_query = $request->input('search');
        $movie_request_query = MovieRequest::query();

        if($search_query){
            $movie_request_query->where('name',$search_query);
        }
        $movie_request=$movie_request_query
            ->get();

        // get all movie types and pass it to compact(will be used for select)

        $movie_types = MovieType::get();

            return view('movie-request.index',compact('movie_request','movie_types'));
    }

}

