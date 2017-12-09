@extends('layouts.app')

@section('content')
     <h1 style="text-align: center">{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
      <p>{{$post->body}}</p> 


@endsection
