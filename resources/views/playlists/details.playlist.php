@extends('layouts.app')

@section('content')
    @foreach($playlists as $playlist)
        <a href="{{url('/details.playlist', $playlist->id)}}">
            <div>
                <h1>{{$playlist->name}}</h1>
            </div>
        </a>
    @endforeach
@endsection