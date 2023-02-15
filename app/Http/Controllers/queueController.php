<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Session;
use App\Models\Song;

class QueueController extends Controller
{

    public function index(Request $request)
{
    $song = $request->session()->get('song');
    return view('queue/index', compact('song'));
 }

    public function addToQueue($id)
{
    $song = song::find($id);
    Session::push('song', $song);
    return redirect('queue');
}



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

    public function clearSession(request $request){
        $request->session()->flush();
        return redirect('queue');
    }
}