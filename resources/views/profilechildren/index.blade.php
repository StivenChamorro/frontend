@extends('layouts.header_yes')
@section('content')
    {{-- Content --}}
    <main class="h-screen w-full flex flex-col mx-auto" style="font-family: 'Happy Monkey';">
        <!-- Parte superior con la imagen -->
        <div class="h-2/5 w-full bg-cover bg-center relative"
            style="background-image: url('{{ asset('img/bg_child.png') }}');">
            <!-- Título sobre la imagen -->
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold" style="font-family: 'Happy Monkey', cursive;">¡Hola!</h1>
                <p class="text-2xl md:text-3xl font-semibold">Nick</p>
            </div>
        </div>

        <!-- Parte inferior con el gradiente -->
        <div
            class="relative h-[69%] w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B] flex items-center tablet:px-8 -mt-20 z-20">
            <!-- Contenedor de tarjetas -->
            <div
                class="w-full h-full flex flex-col tablet:flex-col desktop:flex-row space-y-6 tablet:space-y-6 desktop:space-y-0 desktop:space-x-6 items-end desktop:px-64">
                <div id="profile-view">
                    <div
                        class="bg-white rounded-xl text-center p-6 w-full tablet:w-[42rem] tablet:h-[15rem] tablet:mx-4 mobile:w-[24rem] mobile:mx-12 desktop:w-[30rem] desktop:h-[40rem] shadow-lg flex flex-col items-center relative z-30">
                        <!-- Contenedor de imagen -->
                        <div class="relative -mt-20 mb-2 tablet:-mt-16 mobile:-mt-16">
                            <img src="https://via.placeholder.com/150" alt="Avatar"
                                class="desktop:w-44 desktop:h-44 tablet:w-32 tablet:h-32 mobile:w-28 mobile:h-28 rounded-full border-2 border-white object-cover">
                        </div>
                        <!-- Información del perfil -->
                        <h2 class="text-lg font-bold text-center flex items-center">
                            <span id="profile-name" class="mr-2 text-2xl mobile:text-xl">Nick</span>
                            <!-- Espacio entre el nombre y el ícono -->
                            <button id="edit-name-btn" class="text-sm text-[#EF476F] hover:text-[#d8335a]"
                                onclick="openNameModal()">✏️</button>
                        </h2>
                        <p class="text-center text-gray-600 mb-4 text-xl mobile:text-sm">
                            Nicolas Smith Pines<br>8 años<br>Eres hijo de John Smith
                        </p>
                    </div>
                </div>

                <!-- Modal de edición de nombre -->
                <div id="profile-edit-modal"
                    class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center tablet:w-[25rem]">
                    <div class="bg-white rounded-lg p-4 shadow-md w-full desktop:w-[30rem] tablet:w-[20rem]">
                        <h2 class="text-lg font-bold text-center">Editar nombre</h2>
                        <form id="name-form" class="flex flex-col items-center" aria-label="Edit name form"
                            onsubmit="saveName(event)">
                            <input id="name-input"
                                class="border border-gray-300 rounded-md p-2 text-center text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-[#EF476F]"
                                type="text" placeholder="Escribe el nuevo nombre" required />
                            <button type="submit"
                                class="mt-4 bg-[#EF476F] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#d8335a]">Guardar
                                nombre</button>
                            <button type="button" onclick="closeNameModal()"
                                class="mt-2 text-gray-500 hover:text-gray-800">Cancelar</button>
                        </form>
                    </div>
                </div>

                <!-- Tarjeta de información -->
                <div id="info-card"
                    class="bg-white rounded-xl p-6 w-full desktop:w-[30rem] desktop:h-[30rem] shadow-lg flex flex-col tablet:w-[42rem] tablet:mx-4 mobile:w-[24rem] mobile:mx-12">
                    <h3 class="text-lg font-semibold text-[#F2446B] flex items-center">
                        <span class="mr-2">📝</span> Escribe sobre ti
                        <button id="edit-btn" class="ml-auto text-[#F2446B] hover:text-[#d8335a]"
                            onclick="openInfoModal()">
                            ✏️
                        </button>
                    </h3>
                    <p id="info-text" class="text-sm text-gray-600 flex-grow overflow-y-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id est, unde exercitationem, rerum
                        perspiciatis deleniti.
                    </p>
                </div>

                <!-- Modal de edición de información -->
                <div id="info-edit-modal"
                    class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center">
                    <div class="bg-white rounded-lg p-4 shadow-md w-full desktop:w-[30rem] tablet:w-[25rem]">
                        <h2 class="text-lg font-bold text-center">Editar información</h2>
                        <form id="info-form" class="flex flex-col items-center" aria-label="Edit info form"
                            onsubmit="saveInfo(event)">
                            <textarea id="info-input" rows="4"
                                class="tablet:w-[20rem] mobile:w-[25rem] border border-gray-300 rounded-md p-2 text-center text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-[#EF476F]"
                                placeholder="Escribe tu información aquí" required></textarea>
                            <button type="submit"
                                class="mt-4 bg-[#EF476F] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#d8335a]">Guardar
                                información</button>
                            <button type="button" onclick="closeInfoModal()"
                                class="mt-2 text-gray-500 hover:text-gray-800">Cancelar</button>
                        </form>
                    </div>
                </div>

                <!-- Tarjeta de temas recientes -->
                <div
                    class="bg-white rounded-xl p-6 w-full desktop:w-[30rem] desktop:h-[30rem] tablet:w-[42rem] tablet:mx-4 shadow-lg flex flex-col mobile:w-[24rem] mobile:mx-12">
                    <h3 class="text-lg font-semibold text-[#F2446B] flex items-center mb-2">
                        <span class="mr-2">📚</span> Temas recientes
                    </h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <img src="https://via.placeholder.com/20" class="h-10 w-10 mobile:h-6 mobile:w-6 mr-2 rounded-full"> Matemáticas
                        </li>
                        <li class="flex items-center">
                            <img src="https://via.placeholder.com/20" class="h-10 w-10 mobile:h-6 mobile:w-6 mr-2 rounded-full"> Ciencias sociales
                        </li>
                        <li class="flex items-center">
                            <img src="https://via.placeholder.com/20" class="h-10 w-10 mobile:h-6 mobile:w-6 mr-2 rounded-full"> Astronomía
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @yield('content')
    @include('layouts.footer')

    <script>
        function openNameModal() {
            document.getElementById('profile-edit-modal').classList.remove('hidden');
        }

        function closeNameModal() {
            document.getElementById('profile-edit-modal').classList.add('hidden');
        }

        function saveName(event) {
            event.preventDefault();
            const newName = document.getElementById('name-input').value;
            document.getElementById('profile-name').innerText = newName;
            closeNameModal();
        }

        function openInfoModal() {
            document.getElementById('info-edit-modal').classList.remove('hidden');
            document.getElementById('info-input').value = document.getElementById('info-text')
                .innerText; // Rellenar el textarea con la información actual
        }

        function closeInfoModal() {
            document.getElementById('info-edit-modal').classList.add('hidden');
        }

        function saveInfo(event) {
            event.preventDefault();
            const newInfo = document.getElementById('info-input').value;
            document.getElementById('info-text').innerText = newInfo;
            closeInfoModal();
        }
    </script>
@endsection
