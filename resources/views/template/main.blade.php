<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts.css')}}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    @yield('scriptsup')
    <title>Tienda - @yield('title')</title>
</head>
<body>
@include('template.partials.nav')
<br><br>
@yield('content')

@yield('scriptsdown')
<script src="{{asset('js/jss.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>