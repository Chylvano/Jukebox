<?php
namespace App;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\support\Facades\Session;

class SessionManagement{
    public function getPlaylist(){
        $playlist = session()->get('playlist');
        return $playlist;
    }
   
    //Adds song to queue by id
    public function addToQueue($id)
{
    $song = song::find($id);
    Session::push('song', $song);
    return redirect('queue');
}


    //forgets 1 song from queue
    public function forgetOneFromQueue(request $request, $id)
{    
    $songs = $request->session()->get('song');
    
    foreach($songs as $key => $song){
        if($song->id == $id){
            unset($songs[$key]);
            $request->session()->forget('song');
            
            foreach($songs as $song){
                Session::push('song', $song);
            }

            return redirect('queue');
        }
    }
}

    //Clears all the songs from the session
    public function clearSession(request $request){
        $request->session()->flush();
        return redirect('queue');
    }

    public function insertQueueToDb($songs){
        
    }

}
?>