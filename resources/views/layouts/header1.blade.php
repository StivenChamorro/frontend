<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <script src="{{asset('js/script_escoger-imagen.js')}}"></script>
    <script src="{{asset('js/script_desplegable-perfil.js')}}"></script>
    @vite(['resources/views/layouts/css-layouts/header_tienda.css','resources/css/app.css', 'resources/js/animate.js'])
    <title>Document</title>
</head>
<body>
    <header>
        <div class="contenedor_header-store" >
            <div class="logo_header">
                <img class="logo"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/wooperland_titulo.png') }}"alt="titulo-wooperland">
            </div>
        </div>
    </header>
    @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->

</body>
</html>