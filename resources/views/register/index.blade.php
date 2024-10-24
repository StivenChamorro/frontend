@extends('layouts.header1')
@section('content')
{{-- Content --}}
    <main class="h-[70%] w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
        <div class="w-[90%] h-full flex flex-cols-2 mx-24 mobile:justify-center mobile:mx-8 desktop:pl-32">         
            <div class="desktop:w-1/2 desktop:h-[52rem] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:h-[90%] mobile:h-11/12 desktop:mt-8 desktop:px-14 mobile:h-[90%] mobile:w-[30rem] overflow-y-auto mobile:my-4">  
                <h1 class="text-center text-white text-5xl p-4 mobile:text-4xl mobile:p-0 hover:scale-110 transition duration-200">Registrate</h1>
                <form action="{{ route('terminos') }}" class="w-full grid gap-2 mt-2">
                    <!-- Nombres y Apellidos en una fila -->
                    <div class="flex flex-col mobile:gap-2 tablet:flex-row tablet:gap-4 w-full">
                        <div class="flex flex-col w-full mt-2">
                            <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Nombres:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar Nombres">
                        </div>
                        <div class="flex flex-col w-full mt-2">
                            <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Apellidos:</label>
                            <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar Apellidos">
                        </div>
                    </div>
            
                    <!-- Fecha de Nacimiento -->
                    <div class="flex flex-col w-full mt-2">
                        <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Fecha de Nacimiento:</label>
                        <input type="date" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200">
                    </div>
            
                    <!-- Correo Electrónico -->
                    <div class="flex flex-col w-full mt-2">
                        <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Correo Electrónico:</label>
                        <input type="email" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar Correo Electrónico">
                    </div>
            
                    <!-- Usuario -->
                    <div class="flex flex-col w-full mt-2">
                        <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Usuario:</label>
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar Usuario">
                    </div>
            
                    <!-- Contraseña -->
                    <div class="flex flex-col w-full mt-2">
                        <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">Contraseña:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar Contraseña">
                    </div>
            
                    <!-- PIN -->
                    <div class="flex flex-col w-full mt-2">
                        <label class="text-white text-3xl mb-2 hover:scale-110 transition duration-200">PIN:</label>
                        <input type="password" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-2xl mobile:text-lg hover:scale-105 transition duration-200" placeholder="Ingresar PIN">
                    </div>
            
                    <!-- Botón Registrarme -->
                    <div class="flex justify-center">
                        <button class="w-[12rem] h-12 bg-[#FFD166] text-black rounded-2xl mt-6 text-2xl border border-black shadow-md shadow-black hover:text-white hover:scale-110 transition duration-200">
                            Registrarme
                    </div>
                </form>
            </div>
                    
            <div class="w-1/2 hidden desktop:flex h-[56rem] pb-8 desktop:mt-14">
                <img src="{{asset('img/register_image.png')}}" class="h-[90%] w-full rounded-r-lg">
            </div>
        </div>
    </main>
    @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->
@include('layouts.footer')
@endsection