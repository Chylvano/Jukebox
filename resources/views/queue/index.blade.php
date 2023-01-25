@extends('layouts.app')

@section('content')
<a href="{{ url('/queue/index/delete') }}" class="btn btn-primary">delete session</a>
@endsection