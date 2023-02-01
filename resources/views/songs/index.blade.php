@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($songs as $song)
            <div class="col-sm-3 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$song->name}}</h5>
                        <P class="card-text">artist: {{$song->artist}} </P>
                        <P class="card-text">genre: {{$song->genre->name}}</P>
                        <P class="card-text">duration: {{$song->duration}}</P>
                        <a href="{{ url('/details/' . $song->id ) }}" class="btn btn-info">see details of {{$song->name}}</a>
                        <br>
                        <br>
                        <a href="{{ url('/queue/index/' . $song->id ) }}" class="btn btn-success">add {{$song->name}} to queue </a>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
@endsection