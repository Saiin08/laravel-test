<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store($movie_id){
        $review = new Review;
        $review->movie_id = $movie_id;
        $review->text = $_POST['text'];
        $review->save();

        return redirect()->back();

    }
}
