<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SessionManagement;


class QueueController extends Controller
{
        public function index(Request $request)
    {
        $song = $request->session()->get('song');
        return view('queue/index', compact('song'));
    }

    public function addToQueue(request $request, $key){
        $queue = new SessionManagement($request);
        $queue->addToQueue($key);
        return redirect('queue');
    }

    public function clearSession(request $request){
        $queue = new SessionManagement($request);
        $queue->clearSession($request);
        return back();
    }

    public function forgetOneFromQueue(Request $request, $key){
        $queue = new SessionManagement($request);
        $queue->forgetOneFromQueue($request, $key);
        return redirect('queue');
    }
}