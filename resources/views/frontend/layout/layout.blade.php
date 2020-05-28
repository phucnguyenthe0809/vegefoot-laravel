<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    @show
  </head>
  <body>
    @include('frontend.layout.include.nav')
    @yield('main')
    @include('frontend.layout.include.footer')

  </body>
</html>