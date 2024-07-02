<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Blog - @yield('header')</title>
  </head>

  <body class="container p-8">
    @yield('content')
  </body>

</html>
