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
    <title>Tienda de productos</title>
</head>
<body>
<br><br>
<center>
    <div class="row">
        <div class="col s12 l12">
            <h3>Bienvenidos a la mejor tienda virtual</h3>
            <br><br>
            <img src="{{asset('images/Mobile-Payments.png')}}" class="responsive-img" style="width:200px; height:230px;" ><br>
            <a href="{{route('inicio')}}" class="waves-effect waves-light btn-small">Entrar</a>
        </div>
    </div>
</center>
<script src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>