@extends('layouts.plantilla')
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

</head>
<body>
<div class="flex-center position-ref ">


    <div class="content">
        <img src="https://www.logikom.com/lgk/wp-content/uploads/2019/04/Redes-e-Infraestructura-1.png" width="500" height="300">

        <div class="title m-b-md">
            Redes de Computadoras II

        </div>

        <div class="links">
            <a href="{{route('document')}}"> <img src="{{asset('imagenes/Doc.png')}}" width="100" height="100">Documentación</a>
            <a href="https://github.com/MRpintoM/Lenet_Project" > <img src="https://github.com/fluidicon.png" width="100" height="100">Código fuente</a>
            <a href="#"> <img src="{{asset('imagenes/config.png')}}" width="100" height="100">Configuraciones</a>

        </div>
    </div>


</div>


</body>
</html>


@endsection
