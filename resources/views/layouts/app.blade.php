<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('metaTitle','Sito web ufficiale di Gianluca Lomarco')</title>
  @yield('meta')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  {{-- header --}}
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  {{-- footer --}}
  @include('partials.footer')
  
</body>
</html>