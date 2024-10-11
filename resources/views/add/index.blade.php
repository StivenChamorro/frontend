@extends('layouts.header&footer')
@section('content')
    {{-- Content --}}
    <main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
        <div class="h-full flex flex-col mobile:flex-row justify-center items-center px-4 tablet:px-0">
            <div class="relative w-1/3 h-full grid grid-rows-3">
                <!-- Primera fila (Imagen wooper en Avion) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_airplane.png') }}" alt="Avión" id="movingImage1" class="h-48 w-48">
                </div>
                <!-- Segunda fila (Imagen wooper en Carro Rally) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_car.png') }}" alt="Avión" id="movingImage2" class="h-48 w-48">
                </div>
                <!-- Tercera fila (Imagen wooper en Moto Clasica) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_moto.png') }}" alt="Avión" id="movingImage3" class="h-48 w-48">
                </div>
            </div>
            <div
                class="desktop:h-[52rem] desktop:w-1/3 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:w-[200rem] tablet:h-[70%] mobile:w-[1200rem] mobile:h-[48rem] mobile:my-6 desktop:px-14">
                <h1 class="text-center text-white text-2xl mobile:text-3xl tablet:text-4xl p-2 hover:scale-110">Crear Nuevo Perfil</h1>
                <form action="" class="w-full grid gap-6 px-4 tablet:px-6">
                    <!-- Foto de Perfil con ícono de añadir -->
                    <div class="flex flex-col items-center">
                        <div class="relative w-20 h-20 mobile:w-28 mobile:h-28 tablet:w-28 tablet:h-28 rounded-full border-4 border-white overflow-hidden hover:scale-110">
                            <img id="profileImage" src="https://via.placeholder.com/150" alt="Foto de Perfil" class="w-full h-full object-cover">
                            <label for="profilePicture" class="absolute bottom-0 right-0 w-8 h-8 tablet:w-10 tablet:h-10 bg-[#FFD166] text-black rounded-full flex items-center justify-center cursor-pointer border-2 border-black shadow-lg z-10">
                                <i class="fas fa-plus"></i>
                            </label>
                            <input type="file" id="profilePicture" class="hidden" accept="image/*">
                        </div>
                    </div>
                    
                    <!-- Nombre -->
                    <div class="flex flex-col w-full">
                        <input
                            class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl hover:scale-110"
                            placeholder="Ingresar Nombre">
                    </div>

                    <!-- Apellido -->
                    <div class="flex flex-col w-full">
                        <input
                            class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl hover:scale-110"
                            placeholder="Ingresar Apellido">
                    </div>

                    <!-- Edad -->
                    <div class="flex flex-col w-full">
                        <input type="number" id="ageInput"
                            class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl hover:scale-110"
                            placeholder="Ingresar Edad" min="0" max="10">
                    </div>

                    <!-- Relación con el niño -->
                    <div class="flex flex-col w-full">
                        <select class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl text-gray-400 hover:scale-110">
                            <option value="" disabled selected>Relación con el Niño</option>
                            <option class="text-black">Padre/Madre</option>
                            <option class="text-black">Tutor</option>
                            <option class="text-black">Otro</option>
                        </select>
                    </div>

                    <!-- Género -->
                    <div class="flex items-center gap-4">
                        <label class="text-white text-lg mobile:text-xl tablet:text-xl">Género:</label>
                        <select class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl text-gray-400 hover:scale-110">
                            <option value="" disabled selected>Seleccionar Género</option>
                            <option class="text-black">Masculino</option>
                            <option class="text-black">Femenino</option>
                        </select>
                    </div>

                    <!-- Nombre de Usuario -->
                    <div class="flex flex-col w-full">
                        <input class="w-full h-10 mobile:h-12 tablet:h-12 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-xl tablet:text-xl hover:scale-110"
                            placeholder="Ingresar Nombre de Usuario">
                    </div>

                    <!-- Botón Siguiente -->
                    <div class="flex justify-center w-full">
                        <a href="#">
                            <button
                                class="w-2/3 mobile:w-[10rem] tablet:w-[12rem] p-2 bg-[#FFD166] text-black rounded-3xl text-lg mobile:text-xl tablet:text-xl border-2 border-black shadow-md shadow-black hover:text-white hover:scale-110">
                                Siguiente
                            </button>
                        </a>
                    </div>  
                </form>
            </div>
            <div class="relative w-1/3 h-full grid grid-rows-3">
                <!-- Primera fila (Imagen wooper en Avion) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_f1.png') }}" alt="Avión" id="movingImage4" class="h-48 w-48">
                </div>
                <!-- Segunda fila (Imagen wooper en Carro Rally) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_gp.png') }}" alt="Avión" id="movingImage5" class="h-48 w-48">
                </div>
                <!-- Tercera fila (Imagen wooper en Moto Clasica) -->
                <div class="w-full h-full flex justify-start items-start desktop:block tablet:hidden mobile:hidden">
                    <img src="{{ asset('wooper_cop.png') }}" alt="Avión" id="movingImage6" class="h-48 w-48">
                </div>
            </div>
        </div>
    </main>
@endsection
