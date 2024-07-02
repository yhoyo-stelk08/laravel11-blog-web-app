<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Blog - @yield('title')</title>
  </head>

  <body class="container mx-auto my-10 max-w-xl">
    <header>
      <h1>
        @yield('header')
      </h1>
    </header>
    <section>

      @yield('content')
    </section>
  </body>

</html>
