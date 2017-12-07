@extends('layouts.app')

@section('content')
<h2>This is the index page</h2>
@if(count($colors) > 0)
  <ul>
  @foreach($colors as $color)
    <li> {{$color}}</li>
  @endforeach
</ul>
@endif

@endsection
