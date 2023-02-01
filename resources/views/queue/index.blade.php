@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(Session::has('song'))
            @foreach(Session::get('song') as $item)
             <div class="col-sm-3 mx-auto" >
                <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                         <br>
                        <a href="{{ url('/details/' . $item->id ) }}" class="btn btn-danger">delete {{$item->name}} from queue</a>
                     </div>    
                 </div>
            </div>
            @endforeach
    </div>
    <br>
    <div class="col-sm-3 mx-auto" >
        <a href="{{ url('/queue/index/delete') }}" class="btn btn-danger">Clear queue</a>
    </div>
    @else 
    <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Your queue is empty</h5>
                </div>
            </div>
            </div>
    @endif 
</div>
@endsection