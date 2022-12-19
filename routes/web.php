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

Auth::routes();

Route::get('/genres', [App\Http\Controllers\GenresController::class, 'getAllGenres']);

Route::get('/showSongsByGenre/{genre_id}', [App\Http\Controllers\SongsController::class, 'getSongsByGenre']);

Route::get('/songs', [App\Http\Controllers\SongsController::class, 'getAllSongs']);

