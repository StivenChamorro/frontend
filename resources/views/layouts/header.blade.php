<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/script_escoger-imagen.js')}}"></script>
    @vite(['resources/views/layouts/css-layouts/header.css', 'resources/views/layouts/js-layouts/header.js'])

    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>@yield('title')</title> <!-- Sección para el título dinámico -->

</head>
<body>
    <header>
        <div class="logo">WOOPERLAND</div>
        <nav class="nav-container">
            <button class="nav-button"> <a href="{{route('vista_3_store')}}">Tienda</a></button>
            <div class="separator"></div>
            <button class="nav-button" id="mirar_imagenes">Avatares</button>

            <div class="contenedor_cambiar_imagen" id="cambiar_imagen">
                <h1 class="titulo_cambiar_imagen">  Cambiar foto de perfil</h1>
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_escogida_cambiar_foto.png')}}" class="foto_actual">

                <div class="catalogo_fotos">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/dragon_catagolo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/wooperninja_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopercibor_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/superwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/ciberwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopercopa_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopernieve_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/deadpoolwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible active">
                </div>
                
                <button class="boton_aceptar" id="aceptar_cambiar_imagen"> Aceptar </button>
                <button class="boton_cancelar" id="cancelar_cambiar_imagen"> Cancelar </button>
            </div>
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