@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full   w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] " style="font-family: 'Happy Monkey">
        <div class=" h-full flex flex-cols-2 ml-28">
            <div class="w-2/5 h-full my-12 ml-2 pb-8">
                <img src="{{asset('img/login_image.png')}}" class="h-[90%] w-full rounded-l-lg ">
            </div>
            <div class="w-[50%] h-[95%] mt-4 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl items-center">
                <h1 class="text-center text-white text-2xl p-4">Iniciar Sesión</h1>
                <form class="w-[80%] h-[50%] grid items-center">                    
                    <div class="flex flex-col">
                        <label class="text-white mb-1 p-2 rounded ml-20">Nombre de Usuario:</label>
                        <input class="w-full p-2 rounded-2xl mx-20 ">
                    </div>
                
                    <div class="flex flex-col">
                        <label class="text-white mb-1 p-2 rounded ml-20">Contraseña:</label>
                        <input class="w-full p-2 rounded-2xl mx-20">
                    </div>                
                    <button class="w-[80%] p-2 bg-blue-500 text-white rounded mx-32">Iniciar Sesión</button>
                </form>
                
            </div>
        </div>
    </main>
@endsection