<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
</head>
<body>

@include('inc.navbar')

<div class="container">
  @include('inc.messages')
    @if(Request::is("home"))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>

<footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Acme</p>
</footer>



</body>
</html>
