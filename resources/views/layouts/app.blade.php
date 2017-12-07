<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="icon" href="https://market.enonic.com/vendors/selbekk/io.selbekk.favicon/_/attachment/inline/51f8d6ef-c7db-47bd-aa5d-8a6e3da1d67e:2df7625fb6fd508cb0874730d8f812d52670aff1/favicon_cleaned.svg">
  <title>Laravel first attempt</title>
</head>
<body>
  @include('inc.navbar')
    <div class="container">
    @yield('content')
    <div>
</body>
</html>
