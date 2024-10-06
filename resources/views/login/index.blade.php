@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
        <div class="h-full flex justify-center items-center desktop:pb-20 desktop:pt-8">
            {{-- Imagen solo visible en pantallas grandes --}}
            <div class="hidden desktop:flex w-2/5 h-[95%] my-12 ml-2 pb-8 desktop:mt-32">
                <img src="{{asset('img/login_image.png')}}" class="h-[90%] w-full rounded-l-lg">
            </div>
            {{-- Formulario centrado en todas las pantallas --}}
            <div class="desktop:w-1/2 desktop:h-[90%] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:w-3/4 tablet:h-[70%] mobile:w-11/12 mobile:h-11/12 desktop:mb-8 desktop:px-14">

                <h1 class="text-center text-white text-4xl mobile:text-3xl p-4">Iniciar Sesión</h1>
                
                <form action="" class="desktop:w-full grid gap-4 mt-6 tablet:mt-0.5">
                    <div class="flex flex-col desktop:w-full">
                        <label class="text-white text-2xl mobile:text-xl mb-2">Nombre de Usuario:</label>
                        <input class="desktop:w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-xl mobile:text-lg" placeholder="Ingresar Nombre de Usuario...">
                    </div>

                    <div class="flex flex-col w-full">
                        <label class="text-white text-2xl mobile:text-xl mb-2">Contraseña:</label>
                        <input class="desktop:w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-xl mobile:text-lg" placeholder="Ingresar Contraseña">
                    </div>

                    <div class="flex justify-center">
                        <button class="desktop:w-2/4 p-3 bg-[#FFD166] text-black rounded-3xl mt-6 text-lg mobile:w-2/3 mobile:text-lg border-2 border-black shadow-md shadow-black hover:text-white">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>

                <div>
                    <p class="text-white text-xl mobile:text-lg text-center mt-12">¿No tienes cuenta?
                        <a href="{{ route('registro') }}" class="text-[#FFD166] text-xl mobile:text-lg border-b-2 border-transparent hover:border-[#FFD166] transition duration-100 ease-in-out">
                            Regístrate
                        </a>
                    </p>
                </div>

                <div class="flex flex-col w-full items-center">
                    <button class="desktop:w-2/3 h-14 bg-white text-black rounded-3xl mt-8 text-xl mobile:text-xl tablet:text-xl desktop:text-lg tablet:w-2/3 mobile:w-5/6 border-2 border-black shadow-md shadow-black flex items-center justify-center gap-4">
                        <i class="fab fa-google text-3xl"></i>
                        Continuar con Google
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
