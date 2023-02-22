<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retrieves all songs from db
    public function getAllSongs()
    {
        $Songs = Song::all();
        return view('songs/index', ["songs" => $Songs]);
    }

    //Retrieves all songs from db by date
    public function getAllSongsByDate()
    {
        $Songs = Song::all();
        return view('welcome', ["songs" => $Songs]);
    }

    //Retrieves all songs from one genre
    public function getGenreSongs($id)
    {
        $songs = Song::where('genre_id', $id)->get();
        return view('genres.showSongsByGenre', compact('songs'));
    }

    //Retrieves 1 song from db by id
    public function getOneSongById($id)
    {
        return view('songs.details')
        ->with('song', Song::where('id', $id)->first());
    }

}