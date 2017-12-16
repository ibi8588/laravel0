@extends('layouts.app')

@section('content')
  <div style="text-align: center">
     <h1 class="display-1"><a href="{{$post->id}}/edit">{{$post->title}}</a></h1>
      <p>{{$post->body}}</p>
    <small>Written on {{$post->created_at}}</small>

  </div>
@endsection
