@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Song: {{$song->name}}</h5>
                    <br>
                    <p class="card-text">Artist: {{$song->artist}}</p>
                    <p class="card-text">Genre: {{$song->genre->name}}</p>
                    <p class="card-text">Duration: {{$song->duration}}</p>
                    <p class="card-text">Description: {{$song->description}}</p>
                    <br>
                    <a href="{{ url('/queue/index/' . $song->id ) }}" class="btn btn-success">add {{$song->name}} to queue </a>
                </div>
            </div>
        </div>
        <br>
            <h2>More songs from this genre:</h2>
            <div class="row">
                @foreach($song as $genre)
                    <div class="col-sm-3 mt-3" >
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Song: {{$song->name}}</h5>
                                <p class="card-text">Artist: {{$song->artist}}</p>
                                <p class="card-text">Genre: {{$song->genre->name}}</p>
                                <a href="{{ url('/details/' . $song->id ) }}" class="btn btn-info">see details of {{$song->name}}</a>
                                <br>
                                <br>
                                <a href="{{ url('/queue/index/' . $song->id ) }}" class="btn btn-success">add {{$song->name}} to queue </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
@endsection