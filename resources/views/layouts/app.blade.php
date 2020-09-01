<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="all">Movie <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="add">Add</a>

    </div>
  </div>
</nav>
    <div class="container">
        <div>@yield('content')</div>
    </div>

   
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>