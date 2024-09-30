<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/58965c32f8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/perfil_padre/perfil_padre.css') }}">
    <script src="{{ asset('js/perfil_padre/perfil_padre_oscuro.css') }}"></script>
</head>
<body>
    <div class="container">
    <header>
        <img src="{{ asset('img/perfil_padre/logo.png') }}" alt="logo">
    </header>
    <div class="vistas">
        <h3>John Smith</h2>
            <div class="camara">
                <img src="{{ asset('img/perfil_padre/camara.png') }}" alt="camara">
            </div>
            <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}" alt="usuario foto">
            <div class="persona">
                <img src="{{ asset('img/perfil_padre/persona.png') }}" alt="persona">
                <p>perfil</p>
            </div>

            <div class="jugadores">
                <a href="../../views/vista_jugadores/jugadores.html">
                    <img src="{{ asset('img/perfil_padre/jugador.png') }}" alt="jugador"></a>
                <p>jugadores</p>
            </div>

            <div class="home">
                <img src="{{ asset('img/perfil_padre/home.png') }}" alt="home">
                <p>home</p>
            </div>

            <div class="cerrar">
                <img ssrc="{{ asset('img/perfil_padre/cerrar.png') }}" alt="cerrar">
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
        <div class="informacion">
            <h3>informacion personal</h3>
            <div class="usuario">
            <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}" alt="foto usuario">
            <h2>John Smith</h2>
        </div>
            <h4>Nombres</h4>
            <p>John Andres</p>
            <hr>
            <h4>Apellidos</h4>
            <p>Smith Pines</p>
            <hr>
            <h4>Fecha nacimiento</h4>
            <p>12/08/1986</p>
            <hr>
            <h4>Correo electronico</h4>
            <p>johnsmith@example.com</p>
            <hr>

            <button>Editar</button>
        </div>
    </div>
    <div class="adicional">
        <div class="clave">
            <h3>informacion privada</h2>
            <div class="formulario">
            <h4>Usuario</h4> <input type="text" name="usuario" id="nombre" placeholder="jhonsmith@example.com">
            <h4>Contraseña</h4><input type="text" name="contraseña" id="contraseñar" placeholder="*********  ">
        </div>
            <button>Editar</button>
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
        <img src="{{ asset('img/perfil_padre/logo.png') }}" alt="logo2">
        <hr>
        <div class="sociales">
            <img src="{{ asset('img/perfil_padre/instagram.png') }}" alt="instagram">
            <img src="{{ asset('img/perfil_padre/youtube.png') }}" alt="youtube">
            <img src="{{ asset('img/perfil_padre/facebook.png') }}" alt="facebook">
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
</html>
