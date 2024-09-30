<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
        {{-- Header --}}
        <header class="h-24 w-full bg-[#B43654] flex items-center justify-between px-12">
            <!-- Título -->
            <h1 class="text-5xl text-transparent font-bold relative" style="font-family: 'Press Start 2P'">
                <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                    WOOPERLAND
                </span>
                <span class="text-[#F2446B]">WOOPERLAND</span>
            </h1>
        
            <!-- Contenedor central para centrar los botones -->
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <!-- Botones -->
                <div class="bg-[#DF5D73] rounded-full flex items-center px-4 py-2 space-x-4">
                    <button class="text-white font-medium">Tienda</button>
                    <span class="text-white">|</span>
                    <button class="text-white font-medium">Avatares</button>
                </div>
            </div>
        
            <!-- Avatar -->
            <div class="relative">
                <img src="https://via.placeholder.com/150" alt="Avatar" class="w-12 h-12 rounded-full object-cover">
                <span class="absolute bottom-0 right-0 bg-white rounded-full w-4 h-4 flex items-center justify-center text-[#B43654] text-xs">▼</span>
            </div>
        </header>
        
                
    {{-- Content --}}
    @yield('content')

        {{-- Footer --}}
        <footer class="h-56 w-full bg-[#282424] border-black">
            {{-- Div Arriba --}}
            <div class="flex flex-cols-2 w-full h-4/5">
                {{-- Div Izquierda --}}
                <div class="w-1/2 h-full flex flex-col items-start justify-center p-8 border-b">
                    <!-- Título con línea debajo -->
                    <div class="relative flex items-center">
                        <h1 class="text-3xl text-transparent relative ml-10" style="font-family: 'Press Start 2P';">
                            <!-- Texto con gradiente vertical encima -->
                            <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                                WOOPERLAND
                            </span>
                            <!-- Sombra 3D debajo -->
                            <span class="text-[#F2446B]">WOOPERLAND</span>
                        </h1>
                        <!-- Línea debajo del texto -->
                        <div class="absolute bottom-0 left-0 w-full flex justify-center ml-6">
                            <div class="w-full border border-[#FFFFFF]"></div>
                        </div>
                    </div>
                
                    <!-- Iconos de redes sociales -->
                    <div class="flex space-x-6 mt-6 ml-24">
                        <a href="" target="_blank" class="text-pink-500 text-5xl hover:text-pink-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" target="_blank" class="text-red-600 text-5xl hover:text-red-800">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" target="_blank" class="text-blue-500 text-5xl hover:text-blue-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
        
                {{-- Div Derecha --}}
                <div class="w-1/2 h-full border-b">    
                    <div class="w-1/2"></div>        
                    <!-- Sección Legal -->
                    <div class="w-[60%] flex flex-col items-start justify-center p-2 ml-auto" style="font-family: Happy Monkey">
                        <!-- Título "Legal" con línea debajo -->
                        <h1 class="text-2xl text-white">Legal</h1>
                        <div class="w-1/6 border-b-2 border-white mb-4"></div>                    
                        <!-- Enlaces de términos y políticas -->
                        <a href="#" class="text-white text-lg mb-2 hover:underline">Términos de uso</a>
                        <a href="#" class="text-white text-lg mb-2 hover:underline">Política de Cookies</a>
                        <a href="#" class="text-white text-lg mb-2 hover:underline">Política de privacidad</a>
                    </div>
                </div>
            </div>
        
            {{-- Línea horizontal y texto abajo --}}
            <div class="relative w-full h-1/5 flex items-center" style="font-family: Happy Monkey">
                <div class="text-center text-white w-full">
                    @ 2024 wooperland - Todos los derechos reservados
                </div>
            </div>
        </footer>
        

</body>
</html>