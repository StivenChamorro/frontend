@extends('layouts.header&footer')
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
    <main>
    <div class="vistas">
        <h3>John Smith</h2>
            <input type="file" id="inputFoto" accept="image/*" />
            <button class="camara" onclick="cargarFoto()">
                <img src="{{ asset('img/perfil_padre/camara.png') }}" alt="camara">
            </button>
            <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}"  alt="avatar" id="avatar">
            <div class="menu">
                <div class="item" id="perfil">

                    <img src="{{ asset('img/vista_jugadores/persona.png') }}" alt="persona">
                    <p>perfil</p>
                </div>

                <div class="item" id="jugador">
                    <a href="{{route('father_users')}}">
                    <img src="{{ asset('img/vista_jugadores/jugador.png') }}" alt="jugador"></a>
                    <p>jugadores</p>
                </div>

                <div class="item" id="home"><a href="{{route('home')}}">
                    <img src="{{ asset('img/vista_jugadores/home.png') }}" alt="home"></a>
                    <p>home</p>
                </div>

                <div class="item">
                    <a href="{{route('welcome')}}">
                    <img src="{{ asset('img/perfil_padre/cerrar.png') }}" alt="cerrar"></a>
                    <p>cerrar sesion</p>
                </div>

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
                    <h3>Información Personal</h3>
                    <div class="usuario">
                        <img src="{{ asset('img/perfil_padre/foto_usuario.png') }}" alt="foto usuario">
                        <h2 id="nombreUsuario">John Smith</h2>
                    </div>
                
                    <h4>Nombres</h4>
                    <p class="editable" id="nombres">John Andres</p>
                    <img class="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz" style="display: none;">
                
                    <hr>
                
                    <h4>Apellidos</h4>
                    <p class="editable" id="apellidos">Smith Pines</p>
                    <img class="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz" style="display: none;">
                
                    <hr>
                
                    <h4>Fecha Nacimiento</h4>
                    <p class="editable" id="fechaNacimiento">12/08/1986</p>
                    <img class="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz" style="display: none;">
                
                    <hr>
                
                    <h4>Correo Electrónico</h4>
                    <p class="editable" id="correo">johnsmith@example.com</p>
                    <img class="lapiz" src="{{asset('img/perfil_padre/lapiz.png')}}" alt="lapiz" style="display: none;">
                
                    <hr>
                
                    <button id="editar"><p>Editar</p></button>
                </div>
                
                
    <div class="adicional">
        <div class="clave" id="clave">
            <h3>Información Privada</h3>
            <div class="formulario">
                <h4>Usuario</h4>
                <input type="text" name="usuario" id="nombre" placeholder="Ingrese el correo electronico">
                <h4>Contraseña</h4>
                <input class="pass" type="password" name="contraseña" id="pass" placeholder="*********">
                <i class="fa-solid fa-eye-low-vision" id="togglePassword"></i>
            </div>
            <button id="cambiar"><p>Editar</p></button>
            <div id="botonera" >
            <button id="guardar" style="display: none;"><p>Guardar</p></button>
            <button id="cancelar" style="display: none;"><p>Cancelar</p></button>
        </div>
        </div>
        
        <div class="relleno">
        </div>
    </div>
            </div>
    </section>
    </aside>

</main>
</body>
<script src="{{asset('js/perfil_padre/foto_perfil.js')}}"></script>
<script src="{{ asset('js/perfil_padre/perfil_padre_oscuro.js') }}"></script>
<script src="{{ asset('js/perfil_padre/desplegable.js') }}"></script>
<script src="{{ asset('js/perfil_padre/contraseña.js') }}"></script>
</html>
@endsection
