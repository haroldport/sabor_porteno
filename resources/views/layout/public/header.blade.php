<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sabor Porteño</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://file.myfontastic.com/29yB9EXvwxuGarkqP9krkC/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPiDuTRROWhkyGGO2qkdZiCTA-_8UiSa0"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</head>
<body>
<header class="main-header">
    <div class="l-container">
        <a href="/">
            <img src="{{asset('assets/img/logo.png')}}" alt="" class="logo">
        </a>

        <div id="toggle-menu" class="icon-menu"></div>
        <nav class="main-nav" id="main-nav">
            <ul class="main-menu">
                <li class="main-menu__item">
                    <a href="/" class="main-menu__link">Inicio</a>
                </li>
                <li class="main-menu__item">
                    <a href="/que-buscamos" class="main-menu__link">¿Qué buscamos?</a>
                </li>
                <li class="main-menu__item">
                    <a href="/establishments" class="main-menu__link">Establecimientos</a>
                </li>
                <li class="main-menu__item">
                    <a href="/contact" class="main-menu__link">Contacto</a>
                </li>
            </ul>
        </nav>
    </div>
</header>