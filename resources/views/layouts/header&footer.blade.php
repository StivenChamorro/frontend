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
        <header class="h-24 w-full bg-[#B43654] flex items-center ">
            <h1 class="text-5xl text-transparent font-bold relative ml-12" style="font-family: 'Press Start 2P' ">
                <!-- Texto con gradiente vertical encima -->
                <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                    WOOPERLAND
                </span>
                <!-- Sombra 3D debajo -->
                <span class="text-[#F2446B]">WOOPERLAND</span>
            </h1>
        </header>        
    {{-- Content --}}
    @yield('content')

        {{-- Footer --}}
    <footer  class="h-56 w-full bg-[#282424] border-black">
        <div class="flex flex-cols-2 w-full h-4/5">
            <div class="w-1/2 h-full  flex flex-col items-start justify-center p-8">
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
                    <a href="" target="_blank" class="text-red-600 text-5xl hover:text-red-800 ">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="" target="_blank" class="text-blue-500 text-5xl hover:text-blue-700">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="w-1/2 h-full ">Cont 2</div>            
        </div>
            <div class="w-full h-1/5 bg-red-500">Con 3</div>
    </footer>

</body>
</html>