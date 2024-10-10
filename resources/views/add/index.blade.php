@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
<main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
    <div class="h-full flex flex-col mobile:flex-row justify-center items-center px-4 tablet:px-0">
        <div class="relative w-1/3 h-full">
            <img src="{{ asset('wooper_airplane.png') }}" alt="Avión" id="movingImage" class="h-48 w-48 absolute top-0 left-0">
        </div>
        
        <style>
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-30px); /* Altura del salto */
                }
                60% {
                    transform: translateY(-15px); /* Salto más bajo */
                }
            }
        </style>  
        
        <script>
            const image = document.getElementById('movingImage');
            const container = image.parentElement; // El div contenedor
            let position = 0; // Posición inicial
            const step = 10; // Cuánto se moverá la imagen en cada paso
            const direction = 1; // 1 para mover a la derecha, -1 para mover a la izquierda
            
            function moveImage() {
                // Mueve la imagen
                position += step * direction; // Incrementa la posición horizontal
                
                // Verifica los límites del contenedor
                if (position + image.clientWidth > container.clientWidth || position < 0) {
                    direction *= -1; // Cambia la dirección si llega a un límite
                    position += step * direction; // Corrige la posición
                }
                
                image.style.transform = `translateX(${position}px)`; // Aplica la transformación
                
                // Aplica la animación de rebote
                // image.style.animation = 'bounce 1s ease'; 

                // Reinicia la animación
                setTimeout(() => {
                    image.style.animation = '';
                }, 10);

                // Mueve la imagen cada 500ms
                setTimeout(moveImage, 100);
            }

            // Iniciar el movimiento
            moveImage();
        </script>

        <div class="desktop:h-[52rem] desktop:w-1/3 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8 tablet:w-3/4 tablet:h-[70%] mobile:w-11/12 mobile:h-[48rem] mobile:my-6 desktop:px-14">
            <h1 class="text-center text-white text-2xl mobile:text-4xl tablet:text-4xl p-2">Crear Nuevo Perfil</h1>
            <form action="" class="w-full grid gap-6 px-4 tablet:px-6">
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
        <div class="w-1/3 h-full">
        </div>
    </div>
</main>
@endsection
