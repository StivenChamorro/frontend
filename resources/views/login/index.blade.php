@extends('layouts.header1')
@section('content')
{{-- Content --}}
    <main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
        <div class="h-full flex justify-center items-center desktop:pb-20 desktop:pt-4">
            {{-- Imagen solo visible en pantallas grandes --}}
            <div class="hidden desktop:flex desktop:w-[45rem] desktop:h-[95%] my-12 ml-2  desktop:mt-12">
                <img src="{{asset('img/login_image.png')}}" class="h-[48rem] w-full rounded-l-lg">
            </div>
            {{-- Formulario centrado en todas las pantallas --}}
            <div class="desktop:w-[52rem] desktop:h-[52rem] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:w-3/4 tablet:h-[70%] mobile:w-11/12 mobile:h-[48rem] mobile:my-6 desktop:px-14">

                <h1 class="text-center text-white desktop:text-5xl mobile:text-3xl p-4 hover:scale-110">INICIAR SESIÓN</h1>
                
                <form action="" class="desktop:w-full grid gap-4 mt-6 tablet:mt-0.5 desktop:mt-6 font-extralight">
                    <div class="flex flex-col desktop:w-full desktop:px-12">
                        <label class="text-white text-2xl mobile:text-xl mb-2 hover:scale-110 desktop:text-3xl ">Nombre de Usuario:</label>
                        <input type="text" class="desktop:w-full h-14 rounded-2xl shadow-md shadow-black px-4 text-xl mobile:text-lg hover:scale-105 border border-black" placeholder="Ingresar Nombre de Usuario...">
                    </div>

                    <div class="flex flex-col desktop:w-full desktop:px-12 pt-5">
                        <label class="text-white text-2xl mobile:text-xl mb-2 hover:scale-110 desktop:text-3xl">Contraseña:</label>
                        <input type="password" class="desktop:w-full h-14 rounded-2xl shadow-md shadow-black px-4 text-xl mobile:text-lg hover:scale-105 border border-black" placeholder="Ingresar Contraseña">
                    </div>

                    <div class="flex justify-center mobile:px-12 desktop:px-36 hover:scale-110">
                        <button class="desktop:w-2/4 p-3 bg-[#FFD166] text-black rounded-3xl mt-6 text-lg mobile:w-2/3 mobile:text-lg border-2 border-black shadow-md shadow-black hover:text-white">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>

                <div>
                    <p class="text-white text-xl mobile:text-lg text-center mt-12 animate-bounce">¿No tienes cuenta?
                        <a href="{{ route('registro') }}" class="text-[#FFD166] text-xl mobile:text-lg border-b-2 border-transparent hover:border-[#FFD166] transition duration-100 ease-in-out">
                            Regístrate
                        </a>
                    </p>
                </div>

                <div class="flex flex-col w-full items-center desktop:px-52">
                    <button class="desktop:w-[16rem] h-14 bg-white text-black rounded-3xl mt-8 text-xl mobile:text-xl tablet:text-xl desktop:text-lg tablet:w-2/3 mobile:w-5/6 border-2 border-black shadow-md shadow-black flex items-center justify-center gap-4 hover:scale-110">
                        <i class="fab fa-google text-3xl hover:animate-spin hover:text-blue-300"></i>
                        Continuar con Google
                    </button>
                </div>
                <div class="w-full h-[10rem] mt-6 mobile:mt-2 flex justify-around items-center overflow-hidden">
                    <img src="{{ asset('bici.png') }}" alt="Imagen 3" class="h-40 w-40 animate-slide">
                </div>                            
            </div>
        </div>
    </main>
    @yield('content') <!-- Aquí se inyectará el contenido de las vistas -->
@include('layouts.footer')
@endsection
