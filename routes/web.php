<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/genres', [App\Http\Controllers\GenresController::class, 'getAllGenres']);

Route::get('genre/showSongsByGenre/{id}', [App\Http\Controllers\SongsController::class, 'getGenreSongs']);

Route::get('/showSongsByGenre/{genre_id}', [App\Http\Controllers\SongsController::class, 'getSongsByGenre']);

Route::get('/songs', [App\Http\Controllers\SongsController::class, 'getAllSongs']);

Route::get('/details/{id}', [App\Http\Controllers\SongsController::class, 'getOneSongById']);

Route::get('/queue', [App\Http\Controllers\queueController::class, 'index']);

Route::get('queue/index/{id}', [App\Http\Controllers\queueController::class, 'addToQueue']);

Route::get('queue/delete', [App\Http\Controllers\queueController::class, 'clearFromSession']);