@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
<main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
    <div class="h-full flex flex-col mobile:flex-row tablet:ml-28 justify-center items-center">
        <div class="w-full mobile:w-3/4 tablet:w-3/4 h-[90%] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl mobile:p-8">
            <h1 class="text-center text-white text-2xl mobile:text-4xl tablet:text-4xl p-2">Crear Nuevo Perfil</h1>
            <form action="" class="w-full grid mobile:gap-6 px-4 tablet:px-4">
                <!-- Foto de Perfil con ícono de añadir -->
                <div class="flex flex-col items-center">
                    <div class="relative w-20 h-20 mobile:w-28 mobile:h-28 tablet:w-28 tablet:h-28 rounded-full border-4 border-white overflow-hidden">
                        <img id="profileImage" src="https://via.placeholder.com/150" alt="Foto de Perfil" class="w-full h-full object-cover">
                        <label for="profilePicture" class="absolute bottom-0 right-0 w-8 h-8 tablet:w-10 tablet:h-10 bg-[#FFD166] text-black rounded-full flex items-center justify-center cursor-pointer border-2 border-black shadow-lg z-10">
                            <i class="fas fa-plus"></i>
                        </label>
                        <input type="file" id="profilePicture" class="hidden" accept="image/*">
                    </div>
                </div>

                <!-- Nombre -->
                <div class="flex flex-col w-full">
                    <input class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl" placeholder="Ingresar Nombre">
                </div>
                
                <!-- Apellido -->
                <div class="flex flex-col w-full">
                    <input class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl" placeholder="Ingresar Apellido">
                </div>
                
                <!-- Edad -->
                <div class="flex flex-col w-full">
                    <input type="number" id="ageInput" class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl" placeholder="Ingresar Edad" min="0" max="10">
                </div>

                <!-- Relación con el niño -->
                <div class="flex flex-col w-full">
                    <select class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl text-gray-400">
                        <option value="" disabled selected>Relación con el Niño</option>
                        <option class="text-black">Padre/Madre</option>
                        <option class="text-black">Tutor</option>
                        <option class="text-black">Otro</option>
                    </select>
                </div>

                <!-- Género -->
                <div class="flex items-center gap-4">
                    <label class="text-white text-lg mobile:text-xl tablet:text-xl">Género:</label>
                    <select class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl text-gray-400">
                        <option value="" disabled selected>Seleccionar Género</option>
                        <option class="text-black">Masculino</option>
                        <option class="text-black">Femenino</option>
                    </select>
                </div>

                <!-- Nombre de Usuario -->
                <div class="flex flex-col w-full">
                    <input class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl" placeholder="Ingresar Nombre de Usuario">
                </div>

                <!-- Botón Siguiente -->
                <div class="flex justify-center">
                    <button class="w-2/3 mobile:w-1/2 tablet:w-1/2 p-2 bg-[#FFD166] text-black rounded-3xl text-lg mobile:text-xl tablet:text-xl border-2 border-black shadow-md shadow-black hover:text-white">
                        Siguiente
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection