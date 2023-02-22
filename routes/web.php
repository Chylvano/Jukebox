<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\SongsController::class, 'getAllSongsByDate']);

Route::get('/genres', [App\Http\Controllers\GenresController::class, 'getAllGenres']);

Route::get('/genre/showSongsByGenre/{id}', [App\Http\Controllers\SongsController::class, 'getGenreSongs']);

Route::get('/showSongsByGenre/{genre_id}', [App\Http\Controllers\SongsController::class, 'getSongsByGenre']);

Route::get('/songs', [App\Http\Controllers\SongsController::class, 'getAllSongs']);

Route::get('/details/{id}', [App\Http\Controllers\SongsController::class, 'getOneSongById']);

Route::get('/queue', [App\Http\Controllers\queueController::class, 'index']);

Route::get('/queue/index/{id}', [App\Http\Controllers\queueController::class, 'addToQueue']);

Route::get('/user', [App\Http\Controllers\userController::class, 'getOneUserById']);

Route::get('/queue/clearSession', [App\Http\Controllers\queueController::class, 'clearSession']);

Route::get('/queue/forgetOneFromQueue/{song_id}', [App\Http\Controllers\queueController::class, 'forgetOneFromQueue']);

Route::get('/queue/toPLaylist', [App\Http\Controllers\queueController::class, 'insertQueueToDb']);

Route::get('/playlists', [App\Http\Controllers\PlaylistController::class, 'index']);

Route::get('/playlists/playlists', [App\Http\Controllers\PlaylistController::class, 'getAllPlaylists']);

Route::get('/queuetoplaylist', [App\Http\Controllers\PlaylistController::class, 'insertQueueToDb']);

Route::get('/playlistdetails/{id}', [PlaylistController::class, 'getPlaylistDetails']);

Route::get('/playlists/create', [App\Http\Controllers\PlaylistController::class, 'create']);

Route::post('/playlists', [App\Http\Controllers\PlaylistController::class, 'store']);

Route::get('delete/{id}', [App\Http\Controllers\PlaylistController::class, 'delete']);

Route::get('playlists/edit/{id}', [App\Http\Controllers\PlaylistController::class, 'edit']);

Route::post('playlists/storePlaylist/{id}', [App\Http\Controllers\PlaylistController::class, 'storePlaylist']);

Route::get('playlists/details/{id}', [App\Http\Controllers\PlaylistController::class, 'getPlaylistById']);

Route::get('playlists/playlist_song/{id}', [App\Http\Controllers\PlaylistController::class, 'getAllPlaylistsWithSong_id']);

Route::get('playlists/{playlist_id}/{song_id}', [App\Http\Controllers\PlaylistController::class, 'storeSongToPlaylist']);

