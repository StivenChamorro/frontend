<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    {{-- Header --}}
    <header class="h-24 w-full bg-[#B43654] flex items-center justify-center">
        <h1 class="text-4xl tablet:text-5xl mobile:text-4xl text-transparent font-bold relative" style="font-family: 'Press Start 2P' ">
            <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                WOOPERLAND
            </span>
            <span class="text-[#F2446B]">WOOPERLAND</span>
        </h1>
    </header>        

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="h-auto w-full bg-[#282424] border-black py-8">
        <div class="flex flex-col tablet:flex-row w-full max-w-7xl mx-auto">
            {{-- Div Izquierda --}}
            <div class="w-full tablet:w-1/2 flex flex-col items-start justify-center p-8 tablet:border-b" style="font-family: 'Press Start 2P'">
                <div class="relative flex items-center mb-4">
                    <h1 class="text-3xl mobile:text-2xl tablet:text-3xl text-transparent relative">
                        <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                            WOOPERLAND
                        </span>
                        <span class="text-[#F2446B]">WOOPERLAND</span>
                    </h1>
                    <div class="absolute bottom-0 left-0 w-full flex justify-center">
                        <div class="w-full border border-[#FFFFFF]"></div>
                    </div>
                </div>
                
                <!-- Iconos de redes sociales -->
                <div class="flex space-x-4 mobile:space-x-6 mt-6">
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
            <div class="w-full tablet:w-1/2 flex flex-col items-start justify-center p-8 mobile:border-b">    
                <h1 class="text-lg mobile:text-xl tablet:text-2xl text-white">Legal</h1>
                <div class="w-1/6 border-b-2 border-white mb-4"></div>                    
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Términos de uso</a>
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de Cookies</a>
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de privacidad</a>
            </div>
        </div>
    
        <div class="text-center text-white w-full mt-4" style="font-family: 'Happy Monkey'">
            @ 2024 wooperland - Todos los derechos reservados
        </div>
    </footer>
</body>
</html>