@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full  w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] " style="font-family: 'Happy Monkey">
        <div class="w-[90%] h-full flex flex-cols-2 mx-24 mobile:justify-center mobile:mx-2 pl-32">         
            <div class="desktop:w-1/2 desktop:h-[90%] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:h-[90%] mobile:h-11/12 desktop:mt-8 desktop:px-14 mobile:h-[90%] mobile:w-full overflow-y-auto mobile:mt-10">  
                <h1 class="text-center text-white text-5xl p-4 mobile:text-4xl mobile:p-0">Registrate</h1>
                <form action="" class="w-full grid gap-2 mt-2">
                    <!-- Nombres y Apellidos en una fila -->
                    <div class="flex flex-col mobile:gap-2 tablet:flex-row tablet:gap-4 w-full"> {{-- Usar flex-col para móviles y flex-row para tablet y PC --}}
                        <div class="flex flex-col w-full"> {{-- Mantener w-full para que ocupe toda la fila --}}
                            <label class="text-white text-3xl mb-2">Nombres:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar Nombres">
                        </div>
                        <div class="flex flex-col w-full"> {{-- Mantener w-full para que ocupe toda la fila --}}
                            <label class="text-white text-3xl mb-2">Apellidos:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar Apellidos">
                        </div>
                    </div>
            
                    <!-- Fecha de Nacimiento -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Fecha de Nacimiento:</label>
                        <input type="date" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg">
                    </div>
            
                    <!-- Correo Electrónico -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Correo Electrónico:</label>
                        <input type="email" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar Correo Electrónico">
                    </div>
            
                    <!-- Usuario -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Usuario:</label>
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar Usuario">
                    </div>
            
                    <!-- Contraseña -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Contraseña:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar Contraseña">
                    </div>
            
                    <!-- PIN -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">PIN:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg" placeholder="Ingresar PIN">
                    </div>
            
                    <!-- Botón Registrarme -->
                    <div class="flex justify-center">
                        <button class="w-1/2 h-12 bg-[#FFD166] text-black rounded-2xl mt-6 text-2xl border border-black shadow-md shadow-black hover:text-white">
                            Registrarme
                        </button>
                    </div>
                </form>
            </div>
                    
            <div class="w-1/2 hidden desktop:flex h-[95%] pb-8 desktop:mt-20">
                <img src="{{asset('img/register_image.png')}}" class="h-[90%] w-full rounded-r-lg ">
            </div>
        </div>
    </main>
@endsection