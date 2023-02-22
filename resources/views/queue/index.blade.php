@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('song'))
            <div class="button-box">
                <a href="{{ url('queue/clearSession') }}" class="btn btn-danger mx-2">Clear queue</a>
                <a href="{{ url('playlists/playlist_song') }}" class="btn btn-success mx-2">Add queue to playlist</a>
            </div>
            <br>
            <div class="row">
                @foreach(Session::get('song') as $item)
                    <div class="col-sm-3 my-3 mx-auto" >
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name ?? 'no song'}}</h5>
                                <br>
                                <a href="{{  url('queue/forgetOneFromQueue/'. $item?->id) }}" class="btn btn-danger">delete {{$item->name ?? 'no song'}} from queue</a>
                            </div>    
                        </div>
                    </div>
                @endforeach
            </div>
                @else 
                    <div class="col-sm-12 mx-auto" >
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Your queue is empty</h5>
                            </div>
                        </div>
                    </div>
        @endif 
    </div>
@endsection