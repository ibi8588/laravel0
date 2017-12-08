@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>Welcome to Laravel</h1>
    <p>This is a Lavarel applicaiton</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
<h2>This is the index page</h2>
<ul>
<li><a href="/info">Info</a></li>
<li><a href="/about">about</a></li>
<li><a href="/dance/waltz">Waltz Dance</a></li>
<li><a href="/dance/samba">Samba Dance</a></li>
<li><a href="/services">Services</a></li>
</ul>


@endsection
