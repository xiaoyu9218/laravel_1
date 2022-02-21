<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/app.css" rel="stylesheet">
  <title>Blog - @yield('title')</title>
</head>
<body>
  <!-- @section('sidebar')
              This is the master sidebar.
          @show -->
  <div class="header" >
    <h1><img src="img/header.jpg" alt="花"></h1>
          <div class="container">
              @yield('content')
          </div>
</body>
</html>