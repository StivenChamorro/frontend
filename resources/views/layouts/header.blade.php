<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/views/layouts/css-layouts/header.css', 'resources/views/layouts/js-layouts/header.js'])

    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>@yield('title')</title> <!-- Sección para el título dinámico -->

</head>
<body>
    <header>
        <div class="logo">WOOPERLAND</div>
        <nav class="nav-container">
            <button class="nav-button">Tienda</button>
            <div class="separator"></div>
            <button class="nav-button">Avatares</button>
        </nav>
        <button class="button-profile">
             <img src="{{asset('imgs/imagenes_home/image.svg')}}" alt="" class="profile-img"> 
            <span><img src="{{asset('imgs/imagenes_home/arrow.svg')}}" alt="" class="arrow-profile"></span>
        </button>

        <section class="modal">
            <div class="modal-container" id="profileModal">
                <div class="head-modal">
                    <img src="{{asset('imgs/imagenes_home/profile.svg')}}" alt="" class="img-modal">
                    <span>Nick</span>
                </div>
                <div class="modal-options">
                    <ul>
                        <li><a href="#profile"> <img src="{{asset('imgs/imagenes_home/profile-icon.svg')}}" alt="" class="profile-icon"> Tu Perfil</a></li>
                        <li><a href="#change-player"><img src="{{asset('imgs/imagenes_home/change-player.svg')}}" alt="" class="change-player-icon"> Cambiar de jugador</a></li>
                        <li><a href="#adult-profile"><img src="{{asset('imgs/imagenes_home/adult-profile.svg')}}" alt="" class="adult profile">Perfil Adulto</a></li>
                    </ul>
                </div>
                <div class="foot-modal">
                    <a href="#">
                        <img src="{{asset('imgs/imagenes_home/logout.svg')}}" alt="" class="icon-logout">
                        <span>Cerrar sesión</span>
                    </a>
                </div>
            </div>
        </section>

    </header>

    <!-- Sección para el contenido de la vista -->
    
        @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->
    
</body>
</html>