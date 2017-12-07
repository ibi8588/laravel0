@extends('layouts.app')

@section('content')
<h2>This is the index page</h2>
@if(count($colors) > 0)
  <ul class="list-group">
  @foreach($colors as $color)
    <li class="list-group-item"> {{$color}}</li>
  @endforeach
</ul>
@endif

@endsection
