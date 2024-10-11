<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/script_escoger-imagen.js')}}"></script>
    @vite(['resources/views/layouts/css-layouts/master.css', 
            'resources/views/layouts/js-layouts/header.js',
            'resources/css/app.css',
            'resources/css/animate.css',
            'resources/js/animate.js']) 
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>WOOPERLAND</title> <!-- Sección para el título dinámico -->

</head>
<body>
    <header>
        <div class="logo">WOOPERLAND</div>
    </header>

    <!-- Sección para el contenido de la vista -->
    @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->
    @include('layouts.footer')
    
</body>
</html>
