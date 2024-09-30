@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
<main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
    <div class="h-full flex flex-col mobile:flex-col tablet:flex-row justify-center items-center tablet:gap-6 px-4 tablet:px-0">
        <!-- Imagen (Oculta en móvil, visible en tablet y más grandes) -->
        <div class="hidden tablet:flex justify-center items-center w-full tablet:w-2/5 h-auto my-12 tablet:my-0">
            <img src="{{asset('img/login_image.png')}}" class="h-full tablet:h-[95%] w-auto rounded-l-lg">
        </div>

        <!-- Formulario de inicio de sesión -->
        <div class="w-full tablet:w-1/2 h-auto mt-4 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-6 tablet:p-8 flex flex-col justify-center items-center">
            <h1 class="text-center text-white text-3xl mobile:text-4xl tablet:text-5xl p-4">Iniciar Sesión</h1>
            <form action="" class="w-full grid gap-6 tablet:gap-8 mt-6">
                <!-- Nombre de Usuario -->
                <div class="flex flex-col w-full">
                    <label class="text-white text-xl mobile:text-2xl tablet:text-3xl mb-2">Nombre de Usuario:</label>
                    <input class="w-full h-12 mobile:h-14 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-2xl tablet:text-3xl" placeholder="Ingresar Nombre de Usuario...">
                </div>

                <!-- Contraseña -->
                <div class="flex flex-col w-full">
                    <label class="text-white text-xl mobile:text-2xl tablet:text-3xl mb-2">Contraseña:</label>
                    <input class="w-full h-12 mobile:h-14 rounded-2xl shadow-md shadow-black px-4 text-lg mobile:text-2xl tablet:text-3xl" placeholder="Ingresar Contraseña">
                </div>

                <!-- Botón Iniciar Sesión -->
                <div class="flex justify-center">
                    <button class="w-2/3 mobile:w-1/2 tablet:w-1/3 p-2 mobile:p-4 bg-[#FFD166] text-black rounded-3xl mt-4 mobile:mt-6 text-lg mobile:text-2xl tablet:text-2xl border-2 border-black shadow-md shadow-black hover:text-white">
                        Iniciar Sesión
                    </button>
                </div>
            </form>

            <!-- Registro -->
            <div class="text-center mt-8 mobile:mt-12">
                <p class="text-white text-lg mobile:text-2xl">¿No tienes cuenta?
                    <a href="{{ route('registro') }}" class="text-[#FFD166] text-lg mobile:text-2xl border-b-2 border-transparent hover:border-[#FFD166] transition duration-100 ease-in-out">
                        Regístrate
                    </a>
                </p>
            </div>

            <!-- Botón Google -->
            <div class="flex flex-col w-full items-center">
                <button class="w-full mobile:w-8/12 tablet:w-8/12 h-12 mobile:h-16 bg-white text-black rounded-3xl mt-12 mobile:mt-16 text-lg mobile:text-2xl border-2 border-black shadow-md shadow-black flex items-center justify-center gap-4">
                    <i class="fab fa-google text-2xl mobile:text-4xl"></i>
                    Continuar con Google
                </button>
            </div>
        </div>
    </div>
</main>
@endsection
