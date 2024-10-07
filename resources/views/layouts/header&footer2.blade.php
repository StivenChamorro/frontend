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
    <header class="h-24 w-full bg-[#B43654] flex items-center justify-between px-6 mobile:px-12 tablet:px-20">
        <!-- Título -->
        <h1 class="desktop:text-3xl mobile:text-xl text-transparent font-bold relative" style="font-family: 'Press Start 2P'">
            <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                WOOPERLAND
            </span>
            <span class="text-[#F2446B]">WOOPERLAND</span>
        </h1>
    
        <!-- Avatar y opción de desplegable -->
        <div class="flex items-center space-x-2 relative bg-[#E87080] rounded-xl">
            <img src="{{asset('imgs/imagenes_home/profile.svg')}}" alt="Avatar" class="w-10 h-10 mobile:w-12 mobile:h-12 rounded-full object-cover">
    
            <!-- Icono de opciones y menú desplegable -->
            <div class="relative">
                <button class="text-white" id="dropdownButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div id="dropdownMenu" class="absolute right-0 mt-6 w-48 bg-gradient-to-b bg-[#B43654] shadow-lg rounded-md hidden text-white border">
                    <div class="modal-container">
                        <div class="head-modal flex items-center p-4 border-b text-xl">
                            <img src="{{asset('imgs/imagenes_home/profile.svg')}}" alt="" class="img-modal w-8 h-8 mr-2">
                            <span>Nick</span>
                        </div>
                        <div class="modal-options">
                            <ul class="p-2 mobile:text-sm ">
                                <li class="flex items-center py-2">
                                    <a href="#profile" class="flex items-center">
                                        <img src="{{asset('imgs/imagenes_home/profile-icon.svg')}}" alt="" class="profile-icon w-6 h-6 mr-2"> 
                                        <span>Tu Perfil</span>
                                    </a>
                                </li>
                                <li class="flex items-center py-2">
                                    <a href="#change-player" class="flex items-center">
                                        <img src="{{asset('imgs/imagenes_home/change-player.svg')}}" alt="" class="change-player-icon w-6 h-6 mr-2"> 
                                        <span>Cambiar de jugador</span>
                                    </a>
                                </li>
                                <li class="flex items-center py-2">
                                    <a href="#adult-profile" class="flex items-center">
                                        <img src="{{asset('imgs/imagenes_home/adult-profile.svg')}}" alt="" class="adult profile w-6 h-6 mr-2"> 
                                        <span>Perfil Adulto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="foot-modal p-4 border-t">
                            <a href="#" class="flex items-center">
                                <img src="{{asset('imgs/imagenes_home/logout.svg')}}" alt="" class="icon-logout w-6 h-6 mr-2">
                                <span>Cerrar sesión</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>    
    <script>
        // Obtener elementos
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
    
        // Agregar evento de clic para mostrar/ocultar el menú desplegable
        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    
        // Opcional: cerrar el menú al hacer clic fuera de él
        window.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
    
    
    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="h-auto w-full bg-[#282424] border-black py-8">
        <div class="flex flex-col tablet:flex-row w-full max-w-7xl mx-auto">
            {{-- Div Izquierda --}}
            <div class="w-full tablet:w-1/2 flex flex-col items-start justify-center p-8" style="font-family: 'Press Start 2P'">
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
            <div class="w-full tablet:w-1/2 flex flex-col items-start justify-center p-8">    
                <h1 class="text-lg mobile:text-xl tablet:text-2xl text-white">Legal</h1>
                <div class="w-1/6 border-b-2 border-white mb-4"></div>                    
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Términos de uso</a>
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de Cookies</a>
                <a href="#" class="text-white text-sm mobile:text-base tablet:text-lg mb-2 hover:underline">Política de privacidad</a>
            </div>
        </div>

        {{-- Línea horizontal completa y texto abajo --}}
        <div class="w-full border-t border-white mt-8"></div>
        <div class="text-center text-white w-full mt-4" style="font-family: 'Happy Monkey'">
            @ 2024 wooperland - Todos los derechos reservados
        </div>
    </footer>
</body>
</html>
