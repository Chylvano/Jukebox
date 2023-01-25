<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Session;
use App\Models\Song;

class QueueController extends Controller
{

    // public function index()
    // {
    //     $allSessions = Session::all();
    //     // dd($allSessions);
    // }

    public function index()
{
    $songs = session('songs');
    return view('queue/index', compact('songs'));

    // $allSessions = session()->all();
    //     // dd($allSessions);
 }

    public function addToQueue($id)
{
    $songs = song::find($id);
    Session::push('song', $songs);
    dd($songs);
    return redirect('queue');
}

    public function clearFromSession(request $request){
        $request->session()->flush();
        return redirect('queue');
    }
}
