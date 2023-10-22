<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="{{ $description }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <link
    href="https://fonts.googleapis.com/css2?family=Courgette&family=Hanken+Grotesk:wght@400;700;900&family=Merriweather:wght@400;700;900&family=Montserrat:wght@100;200;300;400;500;700&family=Noto+Sans+Thai&family=Roboto+Slab:wght@400;700;900&family=Roboto:wght@400;700;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"/>
  <script src="{{ asset('js/uikit.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.1/dist/js/uikit-icons.min.js"></script>
  <script src="{{ asset('js/materialize.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/misstyles.css') }}">
  <title>{{ $title }} V & G Diseño Mobiliario s.a.s - Reviviendo tus espacios</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body>
<header>
  <div class="cabecera">
    <a href="{{ route('index') }}">
      <div class="logo">
        <img src="{{ asset('img/logo-redondo.png') }}" alt="Logo V y G Diseño Mobiliario S.A.S" id="img-logo">
        <i class="material-icons icono-menu" id="bar-menu">menu</i>
      </div>
    </a>
  </div>
</header>



