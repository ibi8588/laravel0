@extends('layouts.app')

@section('content')
  <h1 style="text-align:center">{{$title}}</h1>
<h1>This is the info page</h1>
  <h3><?php echo $title; ?> <span style="color:red"> this is passed in through using php</span> </h3>

@endsection
