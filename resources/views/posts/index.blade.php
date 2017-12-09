@extends('layouts.app')

@section('content')

  <h1 style="text-align: center">Posts</h1>
    @if(count($posts) > 1)
      @foreach($posts as $post)
          <div class="well">
            <h3><a href="/posts/{${posts->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            <p>{{$post->body}}</p>
          </div>
        @endforeach
    @else
      <p>No Posts found</p>
    @endif
@endsection
