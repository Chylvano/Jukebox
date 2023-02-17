<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Playlist;
use App\SessionManagement;

class PlaylistController extends Controller
{
    public function index(){
        $playlists = Playlist::all();
        return view ('playlists/index', ['playlists' => $playlists]);
    }
    
    public function getAllPlaylists(Request $request){
        $playlist = new SessionManagement($request);
        $playlists = $playlist->getPlaylist();
        return view ('playlists/index', $playlists);
    }
}