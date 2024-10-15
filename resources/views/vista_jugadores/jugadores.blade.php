@extends('layouts.header1')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/58965c32f8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vista_jugadores/jugadores.css') }}">
    
</head>
<body>
    <div id="principal" class="container">
    <div class="vistas">
        <h3>John Smith</h2>
            <input type="file" id="inputFoto" accept="image/*" />
            <button class="camara" onclick="cargarFotoN()">
                <img src="{{ asset('img/perfil_padre/camara.png') }}" alt="camara">
            </button>
            <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}"  alt="avatar" id="avatar">
            <div class="menu">
            <div class="item" id="perfil">
                <a href="{{route('perfil_padre')}}">
                <img src="{{ asset('img/vista_jugadores/persona.png') }}" alt="persona"></a>
                <p>perfil</p>
            </div>

            <div class="item" id="jugador">
                <img src="{{ asset('img/vista_jugadores/jugador.png') }}" alt="jugador">
                <p>jugadores</p>
            </div>

            <div class="item" id="home"><a href="{{route('home')}}">
                <img src="{{ asset('img/vista_jugadores/home.png') }}" alt="home"></a>
                <p>home</p>
            </div>
        </div>
            <div class="cerrar"><a href="{{route('welcome')}}">
                <img src="{{ asset('img/vista_jugadores/cerrar.png') }}" alt="cerrar"></a>
                <p>cerrar sesion</p>
            </div>
    </div>
    <div class="agregara" id="agregara">
        <h1>Agregar jugador</h1>
        
        <input type="file" id="inputImagen" accept="image/*" />
        <button class="camara" onclick="cargarFoto()">
            <img src="{{ asset('img/perfil_padre/camara.png') }}" alt="camara">
        </button>
        <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}"  alt="avatar" id="avatar">
        <input type="text" id="titulo" placeholder="Título" />
        <input type="text" id="contexto" placeholder="contexto" />
        <button class="agreg_btn" onclick="agregarTarjeta()">Agregar Tarjeta</button>
    </div>
    <aside>
        <div class="decoracion">
        </div>
        <h2>Mis jugadores</h2>
        <hr>
        <button class="switch" id="switch">
            <span><img src="{{ asset('img/vista_jugadores/sol.png') }}" alt="sol"></span>
            <span><img src="{{ asset('img/vista_jugadores/luna.png') }}" alt="luna"></span>
        </button>

        <button id="agregar" class="agregar">Agregar Jugador</button>
        <button id="eliminar" class="eliminar">Eliminar Jugador</button>
        <section>

    <div id="agregados" style="margin-top: 20px;" class="agregados">

        </div>
       
        <div class="relleno">
            <h1></h1>
        </div>
    </div>
    </section>
    </aside>
    <div class="registro">
        <div class="nino">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <div class="info">
            <p>Nombres</p>
            <p>Nicolas</p>
            <p>apellidos</p>
            <p>Smith Pines</p>
            <p>Edad</p>
            <p>8 años</p>
            <p>relacion</p>
            <p>hijo</p>
            <p>genero</p>
            <p>niño</p>
            <p>Nickname</p>
            <p>Nick</p>
        </div>
        </div>
        <div class="grafico">
            <img src="{{ asset('img/vista_jugadores/grafica.png') }}" alt="grafica">
            <p>promedio de horas 1.98 horas</p>

        </div>
        <a href="{{route('vista_usuarios')}}">
        <button>editar informacion</button>
    </a>
    </div>

</div>
@include('layouts.footer')
</body>
<script src="{{ asset('js/vista_jugadores/jugadores.js') }}"></script>
<script src="{{ asset('js/vista_jugadores/visualizar.js') }}"></script>
<script src="{{ asset('js/vista_jugadores/crear_jugador.js') }}"></script>
<script src="{{ asset('js/vista_jugadores/foto_perfil.js') }}"></script>

</html>
@endsection
