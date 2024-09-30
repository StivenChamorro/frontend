@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
    <main class="h-full   w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] " style="font-family: 'Happy Monkey">
        <div class=" h-full flex flex-cols-2 ml-28 justify-center">
            <div class="w-2/5 h-[90%] mt-4 bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl p-8">
                <h1 class="text-center text-white text-5xl p-4">Crear Nuevo Perfil</h1>
                <form action="" class="w-full grid gap-6 mt-6 px-8">
              <!-- Foto de Perfil con ícono de añadir -->
                    <div class="flex flex-col items-center">
                        <div class="relative w-32 h-32 rounded-full border-4 border-white overflow-hidden mb-2">
                            <!-- Imagen de perfil que cambiará -->
                            <img id="profileImage" src="https://via.placeholder.com/150" alt="Foto de Perfil" class="w-full h-full object-cover">
                            
                            <!-- Botón para añadir una nueva foto (posicionado sobre la imagen) -->
                            <label for="profilePicture" class="absolute bottom-0 right-0 w-10 h-10 bg-[#FFD166] text-black rounded-full flex items-center justify-center cursor-pointer border-2 border-black shadow-lg z-10">
                                <i class="fas fa-plus"></i>
                            </label>
                            <input type="file" id="profilePicture" class="hidden" accept="image/*">
                        </div>
                    </div>
                    <!-- JavaScript para cambiar la imagen de perfil -->
                    <script>
                        const profilePictureInput = document.getElementById('profilePicture');
                        const profileImage = document.getElementById('profileImage');
                        profilePictureInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    profileImage.src = e.target.result;
                                };
                                reader.readAsDataURL(file);  // Leer la imagen como URL de datos
                            }
                        });
                    </script>
                    
                    <!-- Nombre -->
                    <div class="flex flex-col w-full">
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Nombre">
                    </div>
                    
                    <!-- Apellido -->
                    <div class="flex flex-col w-full">
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Apellido">
                    </div>
                    
                    <!-- Edad -->
                    <div class="flex flex-col w-full">
                        <input type="number" id="ageInput" class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Edad" min="0" max="10">
                    </div>

                    <!-- JavaScript para validar la edad -->
                    <script>
                        const ageInput = document.getElementById('ageInput');

                        ageInput.addEventListener('input', function(event) {
                            let value = parseInt(event.target.value);
                            
                            // Si el valor es menor que 0 o mayor que 10, lo limitamos
                            if (value < 0) {
                                event.target.value = 0;
                            } else if (value > 10) {
                                event.target.value = 10;
                            }
                        });
                    </script>
                    <!-- Relación con el niño -->
                    <div class="flex flex-col w-full">
                        <select class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl text-gray-400">
                            <option value="" disabled selected>Relación con el Niño</option>
                            <option class="text-black">Padre/Madre</option>
                            <option class="text-black">Tutor</option>
                            <option class="text-black">Otro</option>
                        </select>
                    </div>

                    <!-- Género -->
                    <div class="flex items-center gap-6 mt-4">
                        <label class="text-white text-3xl">Género:</label>
                        <select class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl text-gray-400">
                            <option value="" disabled selected>Seleccionar Género</option>
                            <option class="text-black">Masculino</option>
                            <option class="text-black">Femenino</option>
                        </select>
                    </div>

            
                    <!-- Nombre de Usuario -->
                    <div class="flex flex-col w-full">
                        <input class="w-full h-12 rounded-2xl shadow-md shadow-black px-4 text-3xl" placeholder="Ingresar Nombre de Usuario">
                    </div>
                    
                    <!-- Botón Siguiente -->
                    <div class="flex justify-center ">
                        <button class="w-1/3 p-4 bg-[#FFD166] text-black rounded-3xl text-2xl border-2 border-black shadow-md shadow-black hover:text-white">
                            Siguiente
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </main>
@endsection