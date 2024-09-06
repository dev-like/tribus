<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="">
    <meta property="og:description" content=""/>
    <meta property="og:url" content="">
    <meta name="author" content="Agência Like">
    <link rel="shortcut icon" href="{{ asset('theme/imagens/favicon.ico') }}">

    <title>Conferência Tribus</title>

    <!-- Fontes, Animacoes, Grid -->
    <link rel="stylesheet" href="{{ asset('theme/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/lib/bootstrap-grid.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/footer.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/lib/lightgallery.css') }}">

    <script src="{{ asset('theme/js/lib/jquery.js') }}" charset="utf-8"></script>
  </head>
  <body>

    @yield('body')

    @yield('script')

  </body>
</html>
