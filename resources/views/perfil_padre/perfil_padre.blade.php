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
    <link rel="stylesheet" href="{{ asset('css/perfil_padre/perfil_padre.css') }}">
    
</head>
<body>
    <div class="container">
    <div class="vistas">
        <h3>John Smith</h2>
            <div class="camara">
                <img src="{{ asset('img/perfil_padre/camara.png') }}" alt="camara">
            </div>
            <input type="file" id="changeAvatar" accept="image/* ">
            <img src="{{asset('img/perfil_padre/foto_usuario.png')}}" alt="" id="avatar">
            <div class="menu">
                <div class="item" id="perfil">
                    
                    <img src="{{ asset('img/vista_jugadores/persona.png') }}" alt="persona">
                    <p>perfil</p>
                </div>
    
                <div class="item" id="jugador">
                    <a href="{{route('vista_usuarios')}}">
                    <img src="{{ asset('img/vista_jugadores/jugador.png') }}" alt="jugador"></a>
                    <p>jugadores</p>
                </div>
    
                <div class="item" id="home"><a href="{{route('home')}}">
                    <img src="{{ asset('img/vista_jugadores/home.png') }}" alt="home"></a>
                    <p>home</p>
                </div>
            </div>

            <div class="cerrar">
                <a href="{{route('welcome')}}">
                <img src="{{ asset('img/perfil_padre/cerrar.png') }}" alt="cerrar"></a>
                <p>cerrar sesion</p>
            </div>
    </div>
    <aside>
        <div class="decoracion">
            <p></p>
        </div>
        <h2>Mi cuenta</h2>
        <hr>
        <button class="switch" id="switch">
            <span><img src="{{ asset('img/perfil_padre/sol.png') }}" alt="sol"></span>
            <span><img src="{{ asset('img/perfil_padre/luna.png') }}" alt="luna"></span>
        </button>
        <section>
            <div class="perfil">
        <div class="informacion" id="informacion">
            <h3>informacion personal</h3>
            <div class="usuario">
            <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}" alt="foto usuario">
            <h2>John Smith</h2>
        </div>
            <h4>Nombres</h4>
            <p>John Andres</p>
            <hr>
            <img id="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz">
            <h4>Apellidos</h4>
            <p>Smith Pines</p>
            <hr>
            <img id="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz">
            <h4>Fecha nacimiento</h4>
            <p>12/08/1986</p>
            <hr>
            <img id="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz">
            <h4>Correo electronico</h4>
            <p>johnsmith@example.com</p>
            <hr>
            <img id="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz">

            <button id="editar"><p>Editar</p></button>
    </div>
    <div class="adicional">
        <div class="clave" id="clave">
            <h3>informacion privada</h2>
            <div class="formulario">
            <h4>Usuario</h4> <input type="text" name="usuario" id="nombre" placeholder="jhonsmith@example.com">
            <h4>Contraseña</h4><input type="text" name="contraseña" id="contraseñar" placeholder="*********  ">
        </div>
            <button id="cambiar"><p>Editar</p></button>
        </div>
        <div class="relleno">
            <h1></h1>
        </div>
    </div>
    </section>
    </aside>
    
</div>
</body>
<script src="{{ asset('js/perfil_padre/perfil_padre_oscuro.js') }}"></script>
<script src="{{ asset('js/perfil_padre/desplegable.js') }}"></script>
</html>
@include('layouts.footer')
@endsection
