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

    public function index(Request $request)
{
    $song = $request->session()->get('song');
    // dd($request->session()->all());
    return view('queue/index', compact('song'));

    // $allSessions = session()->all();
 
 }

    public function addToQueue($id)
{
    $song = song::find($id);
    Session::push('song', $song);
    return redirect('queue');
}



    public function forgetOneFromQueue(request $request){
        $request->session()->forget('id');
        return redirect('queue');
    }

    public function clearFromSession(request $request){
        $request->session()->flush();
        return redirect('queue');
    }
}
