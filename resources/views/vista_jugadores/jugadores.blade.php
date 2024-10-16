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
            <div class="camara">
                <img src="{{ asset('img/vista_jugadores/camara.png') }}" alt="camara">
            </div>
            <img src="{{ asset('img/vista_jugadores/foto_usuario.png') }}" alt="usuario foto">
            <div class="menu">
            <div class="item" id="perfil">
                <a href="{{route('profile_father')}}">
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
    <aside>
        <div class="decoracion">
        </div>
        <h2>Mis jugadores</h2>
        <hr>
        <button class="switch" id="switch">
            <span><img src="{{ asset('img/vista_jugadores/sol.png') }}" alt="sol"></span>
            <span><img src="{{ asset('img/vista_jugadores/luna.png') }}" alt="luna"></span>
        </button>

        <a href=""><button id="agregar" class="agregar">Agregar Jugador</button></a>
        <button id="eliminar" class="eliminar">Eliminar Jugador</button>
        <section>

    <div id="agregados" class="agregados">
        <div  class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
            </a>
        </p>
        </div>

        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
            </p>
        </div>
        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
            </p>
        </div>
        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
             </p>
        </div>
        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
             </p>
        </div>
        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
             </p>
        </div>
        <div class="card">
            <img id="avatar" src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
            </p>
        </div>
        <div id="avatar" class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines
                <a href="{{route('father_users')}}">
                <img id="basura" src="{{asset('img/vista_jugadores/eliminar1.png')}}" alt="eliminar">
                </a>
            </p>
        </div>

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
        <a href="{{route('father_users')}}"><button>editar informacion</button></a>
    </div>

</div>
@include('layouts.footer')
</body>
<script src="{{ asset('js/vista_jugadores/jugadores.js') }}"></script>
<script src="{{ asset('js/vista_jugadores/visualizar.js') }}"></script>
</html>
@endsection
