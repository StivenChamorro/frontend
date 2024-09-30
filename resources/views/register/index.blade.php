@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full   w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] " style="font-family: 'Happy Monkey">
        <div class=" h-full flex flex-cols-2 mx-28">         
            <div class="w-1/2 h-[90%] mt-4 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8">
                <h1 class="text-center text-white text-5xl p-4">Registrate</h1>
                <form action="" class="w-full grid gap-2 mt-2">
                    <!-- Nombres y Apellidos en una fila -->
                    <div class="flex w-full gap-4">
                        <div class="flex flex-col w-1/2">
                            <label class="text-white text-3xl mb-2">Nombres:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Nombres">
                        </div>
                        <div class="flex flex-col w-1/2">
                            <label class="text-white text-3xl mb-2">Apellidos:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Apellidos">
                        </div>
                    </div>
            
                    <!-- Fecha de Nacimiento -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Fecha de Nacimiento:</label>
                        <input type="date" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl">
                    </div>
            
                    <!-- Correo Electrónico -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Correo Electrónico:</label>
                        <input type="email" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Correo Electrónico">
                    </div>
            
                    <!-- Usuario -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Usuario:</label>
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Usuario">
                    </div>
            
                    <!-- Contraseña -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Contraseña:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Contraseña">
                    </div>
            
                    <!-- PIN -->
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">PIN:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar PIN">
                    </div>
            
                    <!-- Botón Registrarme -->
                    <div class="flex justify-center">
                        <button class="w-1/3 h-4/5  bg-[#FFD166] text-black rounded-2xl mt-6 text-2xl border border-black shadow-md shadow-black hover:text-white items-center">
                            Registrarme
                        </button>
                    </div>
                </form>
            </div>
            <div class="w-3/6 h-[95%] my-12 mr-2 pb-8">
                <img src="{{asset('img/register_image.png')}}" class="h-[90%] w-full rounded-r-lg ">
            </div>
        </div>
    </main>
@endsection