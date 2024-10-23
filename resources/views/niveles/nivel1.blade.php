@extends('layouts.header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/58965c32f8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/niveles/nivel1.css') }}">
    
</head>
<body>
    <img id="mascota" src="{{asset('img/niveles/woopermatematico.png')}}" alt="woopermatematico">
    <img id="anuncio" src="{{asset('img/niveles/aprendemate.png')}}" alt="aprendemate">
    <section class="hero">
        <div class="fondomatematicas">
            <img src="{{ asset('img/niveles/fondomatematicas.png')  }}" alt="fondo matematicas" class="img-hero">
            {{-- <img src="{{ asset('img/niveles/fondomatematicas.png'),  }}" alt="fondo matematicas" class="img-hero"> --}}
        </div>
    </section>
    <aside>
        <div class="informacion">
            <h2>¿Por qué matemáticas?</h2>
            <hr>
            <p>Las matemáticas son importantes para los niños porque les ayudan a desarrollar habilidades de pensamiento lógico y resolución de problemas. A través de las matemáticas, los niños aprenden a analizar situaciones, encontrar patrones y tomar decisiones basadas en datos. Estas habilidades no solo les sirven en la escuela, sino también en la vida cotidiana, como cuando deben repartir cantidades, medir objetos o manejar el dinero. Además, las matemáticas fomentan la creatividad al encontrar soluciones diferentes para un mismo problema, preparándolos para desafíos futuros.</p>
            <hr>
        </div>
    </aside>
    <aside>
        <div class="nivel">
            <img src="{{asset('img/niveles/matematicas.png')}}" alt="matematicas">
        </div>
    </aside>
    <section>
        <div class="relleno"></div>
    </section>

</body>
<script src="{{ asset('js/vista_jugadores/jugadores.js') }}"></script>
<script src="{{ asset('js/vista_jugadores/visualizar.js') }}"></script>
</html>
@include('layouts.footer')
@endsection
