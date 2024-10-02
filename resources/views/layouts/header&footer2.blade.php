<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    {{-- Header --}}
    <header class="h-24 w-full bg-[#B43654] flex items-center justify-between px-6 tablet:px-12">
        <!-- Título -->
        <h1 class="text-4xl mobile:text-5xl text-transparent font-bold relative" style="font-family: 'Press Start 2P'">
            <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                WOOPERLAND
            </span>
            <span class="text-[#F2446B]">WOOPERLAND</span>
        </h1>
    
        <!-- Contenedor central para centrar los botones -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <!-- Botones -->
            <div class="bg-[#DF5D73] rounded-full flex items-center px-4 py-2 space-x-2 mobile:space-x-4">
                <button class="text-white font-medium">Tienda</button>
                <span class="text-white">|</span>
                <button class="text-white font-medium">Avatares</button>
            </div>
        </div>
    
        <!-- Avatar -->
        <div class="relative">
            <img src="https://via.placeholder.com/150" alt="Avatar" class="w-10 h-10 mobile:w-12 mobile:h-12 rounded-full object-cover">
            <span class="absolute bottom-0 right-0 bg-white rounded-full w-4 h-4 flex items-center justify-center text-[#B43654] text-xs">▼</span>
        </div>
    </header>
    
    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="h-auto w-full bg-[#282424] border-black">
        {{-- Div Arriba --}}
        <div class="flex flex-col tablet:flex-row w-full h-4/5">
            {{-- Div Izquierda --}}
            <div class="w-full tablet:w-1/2 h-full flex flex-col items-start justify-center p-4 tablet:p-8 border-b tablet:border-b-0">
                <!-- Título con línea debajo -->
                <div class="relative flex items-center mb-4">
                    <h1 class="text-3xl mobile:text-2xl tablet:text-3xl text-transparent relative" style="font-family: 'Press Start 2P';">
                        <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                            WOOPERLAND
                        </span>
                        <span class="text-[#F2446B]">WOOPERLAND</span>
                    </h1>
                    <div class="absolute bottom-0 left-0 w-full flex justify-center ml-6">
                        <div class="w-full border border-[#FFFFFF]"></div>
                    </div>
                </div>
            
                <!-- Iconos de redes sociales -->
                <div class="flex space-x-4 mobile:space-x-6 mt-4">
                    <a href="" target="_blank" class="text-pink-500 text-4xl mobile:text-5xl hover:text-pink-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="_blank" class="text-red-600 text-4xl mobile:text-5xl hover:text-red-800">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="" target="_blank" class="text-blue-500 text-4xl mobile:text-5xl hover:text-blue-700">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
    
            {{-- Div Derecha --}}
            <div class="w-full tablet:w-1/2 h-full flex flex-col items-start justify-center p-4 tablet:p-8">    
                <!-- Sección Legal -->
                <div class="flex flex-col items-start justify-center">
                    <h1 class="text-lg mobile:text-xl tablet:text-2xl text-white">Legal</h1>
                    <div class="w-1/6 border-b-2 border-white mb-4"></div>                    
                    <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Términos de uso</a>
                    <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de Cookies</a>
                    <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de privacidad</a>
                </div>
            </div>
        </div>
    
        {{-- Línea horizontal y texto abajo --}}
        <div class="relative w-full flex items-center" style="font-family: 'Happy Monkey'">
            <div class="text-center text-white w-full mt-4">
                @ 2024 wooperland - Todos los derechos reservados
            </div>
        </div>
    </footer>
</body>
</html>
