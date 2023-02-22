@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$User->name}}</h5>
                    <P class="card-text">Email: {{$user->email}} </P>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection