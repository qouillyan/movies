<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MoviesController::class, 'index']);

Route::get('/create', [MoviesController::class, 'create']);

Route::post('/movies', [MoviesController::class, 'store']);

Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('single-movie');

Route::post('/movies/{id}/comments', [CommentsController::class, 'store']);

Route::get('/genres/{genreName}', [GenresController::class, 'show'])->name('genres');