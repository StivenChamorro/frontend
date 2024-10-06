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
    <div class="container">
    <header>
        <img src="{{ asset('img/vista_jugadores/logo.png') }}" alt="logo">
    </header>
    <div class="vistas">
        <h3>John Smith</h2>
            <div class="camara">
                <img src="{{ asset('img/vista_jugadores/camara.png') }}" alt="camara">
            </div>
            <img src="{{ asset('img/vista_jugadores/foto_usuario.png') }}" alt="usuario foto">
            <div class="menu">
            <div class="item" id="perfil">
                <img src="{{ asset('img/vista_jugadores/persona.png') }}" alt="persona">
                <p>perfil</p>
            </div>

            <div class="item" id="jugador">
                <img src="{{ asset('img/vista_jugadores/jugador.png') }}" alt="jugador">
                <p>jugadores</p>
            </div>

            <div class="item" id="home">
                <img src="{{ asset('img/vista_jugadores/home.png') }}" alt="home">
                <p>home</p>
            </div>
        </div>
            <div class="cerrar">
                <img src="{{ asset('img/vista_jugadores/cerrar.png') }}" alt="cerrar">
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

        <button class="agregar">Agregar Jugador</button>
        <button class="eliminar">Eliminar Jugador</button>
        <section>

    <div class="agregados">
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>

        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/vista_jugadores/wooper_mamado.png') }}" alt="wooper_mamado">
            <h3>Nick</h3>
            <p>Nicolas Smith Pines</p>
        </div>


        </div>
        <div class="relleno">
            <h1></h1>
        </div>
    </div>
    </section>
    </aside>
    <footer>
    <div class="descripcion">
    <div class="logo">
        <img src="{{ asset('img/vista_jugadores/logo.png') }}" alt="logo2">
        <hr>
        <div class="sociales">
            <img src="{{ asset('img/vista_jugadores/instagram.png') }}" alt="instagram">
            <img src="{{ asset('img/vista_jugadores/youtube.png') }}" alt="youtube">
            <img src="{{ asset('img/vista_jugadores/facebook.png') }}" alt="facebook">
        </div>
    </div>

    <div class="adicion">
        <p>Legal</p>
        <hr>
        <p>Terminos de uso</p>
        <p>Politica de Cookies</p>
        <p>Politica de privacidad</p>
    </div>
</div>
    <hr>
    <p>@ 2024 Wooperland - Todos los derechos reservados</p>
    </footer>
</div>
</body>
<script src="{{ asset('js/vista_jugadores/jugadores.js') }}"></script>
</html>
