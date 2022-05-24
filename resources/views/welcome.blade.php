@extends('layouts.app')
@section('content')

<button type="button" href="" class="btn btn-secondary">Classical</button>
<button type="button" class="btn btn-secondary">Country</button>
<button type="button" class="btn btn-secondary">Hiphop</button>
<button type="button" class="btn btn-secondary">Pop</button>
<button type="button" href="{{ route('songs') }}" class="btn btn-secondary">Rock</button>

@endsection