@extends('layouts.header&footer2')
@section('content')
{{-- Content --}}
<main class="h-screen w-full flex flex-col" style="font-family: 'Happy Monkey">
    <!-- Parte superior con la imagen -->
    <div class="h-1/3 bg-cover bg-center relative">
        <img src="{{asset('img/bg_child.png')}}" class="w-full h-full object-cover">
        
        <!-- Título sobre la imagen -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-5xl font-bold" style="font-family: 'Happy Monkey', cursive;">¡Hola!</h1>
            <p class="text-3xl font-semibold">Nick</p>
        </div>
    </div>

    <!-- Parte inferior con el gradiente -->
    <div class="h-2/3 bg-gradient-to-b from-[#FFD166] to-[#F78C6B] flex justify-center items-center">
        <!-- Contenedor de tarjetas -->
        <div class="flex space-x-6 mt-[-100px] items-end">
            <!-- Tarjeta de perfil (más alta y superpuesta) -->
            <div class="bg-white rounded-xl p-6 w-80 h-[30rem] shadow-lg flex flex-col items-center relative z-10">
                <!-- Contenedor de imagen para hacer el efecto de superposición -->
                <div class="relative -mt-20 mb-4">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-32 h-32 rounded-full border-4 border-white object-cover">
                    <button class="absolute bottom-0 right-0 bg-[#F2446B] p-1 rounded-full text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </button>
                </div>
                <!-- Información del perfil -->
                <h2 class="text-lg font-bold text-center">Nick</h2>
                <p class="text-center text-sm text-gray-600 mb-4">
                    Nicolas Smith Pines<br>8 años<br>Eres hijo de John Smith
                </p>
                <button class="mt-auto bg-[#EF476F] text-white px-4 py-2 rounded-full shadow-md">
                    Guardar información
                </button>
            </div>
            
        
            <!-- Tarjeta de información -->
            <div class="bg-white rounded-xl p-6 w-[22rem] h-[25rem] shadow-lg flex flex-col">
                <h3 class="text-lg font-semibold text-[#F2446B] flex items-center mb-2">
                    <span class="mr-2">📝</span> Escribe sobre ti
                </h3>
                <p class="text-sm text-gray-600 flex-grow overflow-y-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id est, unde exercitationem, rerum perspiciatis deleniti.
                </p>
            </div>
        
            <!-- Tarjeta de temas recientes -->
            <div class="bg-white rounded-xl p-6 w-80 h-[25rem] shadow-lg flex flex-col">
                <h3 class="text-lg font-semibold text-[#F2446B] flex items-center mb-2">
                    <span class="mr-2">📚</span> Temas recientes
                </h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <img src="https://via.placeholder.com/20" class="mr-2 rounded-full"> Matemáticas
                    </li>
                    <li class="flex items-center">
                        <img src="https://via.placeholder.com/20" class="mr-2 rounded-full"> Ciencias sociales
                    </li>
                    <li class="flex items-center">
                        <img src="https://via.placeholder.com/20" class="mr-2 rounded-full"> Astronomía
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</main>

@endsection