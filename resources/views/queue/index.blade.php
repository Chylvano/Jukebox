@extends('layouts.app')

@section('content')
<div class="container">
     <div class="col-sm-2 my-1 mx-auto" >
        <a href="{{ url('queue/clearSession') }}" class="btn btn-danger">Clear queue</a>
     </div>
    <br>
    @if(Session::has('song'))
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