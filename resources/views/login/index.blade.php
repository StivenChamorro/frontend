@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full   w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] " style="font-family: 'Happy Monkey">
        <div class=" h-full flex flex-cols-2 ml-28">
            <div class="w-2/5 h-[95%] my-12 ml-2 pb-8">
                <img src="{{asset('img/login_image.png')}}" class="h-[90%] w-full rounded-l-lg ">
            </div>
            <div class="w-1/2 h-[90%] mt-4 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8">
                <h1 class="text-center text-white text-5xl p-4">Iniciar Sesión</h1>
                <form action="" class="w-full grid gap-8 mt-6">
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Nombre de Usuario:</label>
                        <input class="w-full h-14 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Nombre de Usuario...">
                    </div>
            
                    <div class="flex flex-col w-full">
                        <label class="text-white text-3xl mb-2">Contraseña:</label>
                        <input class="w-full h-14 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Contraseña">
                    </div>
                    
                    <div class="flex justify-center">
                        <button class="w-1/3 p-4 bg-[#FFD166] text-black rounded-3xl mt-6 text-2xl border-2 border-black shadow-md shadow-black hover:text-white">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
                <div>
                    <p class="text-white text-2xl text-center mt-12">¿No tienes cuenta?
                        <a href="{{ route('registro') }}" class="text-[#FFD166] text-2xl border-b-2 border-transparent hover:border-[#FFD166] transition duration-100 ease-in-out">
                            Regístrate
                        </a>
                        
                    </p>
                </div>
                <div class="flex flex-col w-full items-center">
                    <button class="w-8/12 h-16 bg-white text-black rounded-3xl mt-16 text-2xl border-2 border-black shadow-md shadow-black flex items-center justify-center gap-4">
                        <i class="fab fa-google text-4xl"></i>
                        Continuar con Google
                    </button>
                </div>                
            </div>
        </div>
    </main>
@endsection