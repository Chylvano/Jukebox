<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;
use App\SessionManagement;
use App\Models\Playlist_song;

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

    public function create(){
        return view ('playlists/create');
    }

    public function store(Request $request){
        $input = $request->all();
        $play = Playlist::create($input);

        $songs = Session('song');
        if (isset($songs)) {
            foreach ($songs as $key => $song) {
                $song['id'];
                $play->songs()->attach($song['id']);
            } 
        }
        return redirect('playlists');
    }

    public function delete($id){
        $data = Playlist::find($id);
        $data->delete();
        return redirect('playlists');
   }

   public function edit($id)
    {
        $playlist = Playlist::find($id);
        return view('playlists.edit')->with('playlist', $playlist);
    }

    public function storePlaylist(Request $request, $id){
        $playlist = Playlist::find($id);
        $input = $request->all();
        $playlist->update($input);
        return redirect('playlists');
    }

    public function getPlaylistById($id){
        $playlistSongs = Playlist_song::where('playlist_id', $id)->get();
        $songs = [];
        for ($i=0; $i < count($playlistSongs); $i++) { 
            $song = Song::where('id', $playlistSongs[$i]->song_id)->get();
            array_push($songs, $song);
        }
        return view('playlists.details')
        ->with('playlist', Playlist::where('id', $id)->first())
        ->with(["songs"=>$songs]);

    }
}