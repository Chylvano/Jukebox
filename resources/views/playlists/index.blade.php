@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Playlists</div>
                    <div class="card-body">
                        <a href="{{ url('/playlists/create') }}" class="btn btn-success btn-sm" title="Add New Playlist">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create new playlist
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($playlists as $playlist)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $playlist->name }}</td>
                                            <td>
                                                <a href="{{ url('/playlists/' . 'details/' . $playlist->id) }}" class="btn btn-info btn-sm">View</button></a>
                                                <a href="{{ url('/playlists/' . 'edit/' . $playlist->id) }}" class="btn btn-primary btn-sm">Edit</button></a>
                                                <a href={{"delete/" .$playlist->id}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
