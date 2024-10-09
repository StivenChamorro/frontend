@extends('layouts.master')
@section('content')
{{-- Content --}}
<main class="h-screen w-full flex flex-col mx-auto" style="font-family: 'Happy Monkey';">
    <!-- Parte superior con la imagen -->
    <div class="h-2/5 w-full bg-cover bg-center relative" style="background-image: url('{{ asset('img/bg_child.png') }}');">
        <!-- Título sobre la imagen -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold" style="font-family: 'Happy Monkey', cursive;">¡Hola!</h1>
            <p class="text-2xl md:text-3xl font-semibold">Nick</p>
        </div>
    </div>

    <!-- Parte inferior con el gradiente -->
    <div class="h-3/5 w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] flex items-center tablet:px-8">
        <!-- Contenedor de tarjetas -->
        <div class="w-full h-full flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6 desktop:mt-[-150px] items-end desktop:px-64">
            <!-- Tarjeta de perfil (más alta y superpuesta) -->
            <div class="bg-white rounded-xl p-6 w-full desktop:w-[30rem] desktop:h-[40rem] shadow-lg flex flex-col items-center relative z-10">
                <!-- Contenedor de imagen para hacer el efecto de superposición -->
                <div class="relative -mt-20 mb-4">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="desktop:w-44 desktop:h-44 rounded-full border-4 border-white object-cover">
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
            <div class="bg-white rounded-xl p-6 w-full desktop:w-[30rem] desktop:h-[30rem] shadow-lg flex flex-col">
                <h3 class="text-lg font-semibold text-[#F2446B] flex items-center mb-2">
                    <span class="mr-2">📝</span> Escribe sobre ti
                </h3>
                <p class="text-sm text-gray-600 flex-grow overflow-y-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id est, unde exercitationem, rerum perspiciatis deleniti.
                </p>
            </div>
        
            <!-- Tarjeta de temas recientes -->
            <div class="bg-white rounded-xl p-6 w-full desktop:w-[30rem] desktop:h-[30rem] shadow-lg flex flex-col">
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