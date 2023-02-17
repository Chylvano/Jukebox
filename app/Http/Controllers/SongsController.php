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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
