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
            <a href="{{route('vista_3_store')}}"><button class="nav-button">Tienda</button></a>
            <div class="separator"></div>
            <a href=""><button class="nav-button">Avatares</button></a>
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
                        <li><a href= "{{route('profile')}}"> <img src="{{asset('imgs/imagenes_home/profile-icon.svg')}}" alt="" class="profile-icon"> Tu Perfil</a></li>
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

        {{-- modal cambiar de jugador --}}
        <section class="modal2" id="changePlayerModal">
            <div class="modal-content2">
                <div class="container2">
                    <div class="img-container2">
                        <img src="{{asset('imgs/imagenes_home/wooper.svg')}}" alt="Wooper character">
                    </div>
                    <div class="description2">
                        <p>Estás a punto de cambiar de cuenta de jugador. Ingresa el nickname de la cuenta a la que quieres acceder</p>
                    </div>
                    <div class="name-input-container2">
                        <input type="text" class="name-input2" placeholder="Ingresa el nickname">
                    </div>
                    <button class="search2">
                        Cambiar
                    </button>
                </div>
                <button class="back2" aria-label="Cerrar">×</button>
            </div>
        </section>

         {{-- modal perfil de adulto --}}
         <section class="modal3" id="adultProfileModal">
            <div class="container-pin">
                <div class="img-container3">
                    <img src="{{asset('imgs/imagenes_home/wooperpadre.svg')}}" alt="">
                </div>
                <div class="description3">
                    <p>Para acceder a esta información escribe el pin que ingresaste cuando hiciste el registro</p>
                    <div class="pin-input-container">
                        <input type="text" maxlength="1" class="pin-input" data-index="0">
                        <input type="text" maxlength="1" class="pin-input" data-index="1">
                        <input type="text" maxlength="1" class="pin-input" data-index="2">
                        <input type="text" maxlength="1" class="pin-input" data-index="3">
                    </div>
                    <button class="accept">Ingresar</button>
                    <button class="back2" aria-label="Cerrar">×</button>
                </div>
            </div>
        </section>

    </header>

    <!-- Sección para el contenido de la vista -->
    
        @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->
    
</body>
</html>