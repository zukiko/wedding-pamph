<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" >
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@100&family=Zen+Kaku+Gothic+New:wght@300;500&family=Neonderthaw&family=Noto+Sans+JP:wght@100;300;400&family=Noto+Serif+JP:wght@300&family=Petit+Formal+Script&family=WindSong&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
      
      <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
  </head>
  <body>
    @yield('content')
  </body>
</html>