<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index() {
        $song= new Song();
        $song->name = "Imagine";
        $song->album="blablabla";
        $song->save();
    }
}
