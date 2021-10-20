<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GESTCONGRESSO</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" />
</head>
<body style="background-image: url('images/fundo.jpg')">
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    @yield('content')
</body>
</html>
