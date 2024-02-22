<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieRequestController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awards', [AwardController::class, 'index']);
Route::get('/awards2', [AwardController::class, 'index2']);


Route::get('/home', function () {
    return view('home',['name'=>"Saiyin"]);
});


Route::get('/songs',[SongController::class,'index']);

Route::get('/about-us',[AboutController::class,'aboutUs']);

Route::get('/movie', [IndexController::class, 'index']);

Route::get('/movie-request',[MovieRequestController::class,'index'])->name('movie-request');

Route::get('/movies', [MovieController::class, 'index']);