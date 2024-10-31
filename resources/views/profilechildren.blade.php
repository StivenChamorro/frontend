@extends('layouts.header')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('css/profilechildren.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
@endsection

@section('content')
    <main class="main-container">
        <div class="header-image" style="background-image: url('img/bg_child.png');">
            <div class="overlay-text">
                <h1 class="header-title">¡Hola!</h1>
                <p class="header-subtitle" id="header-name">Nick</p>
            </div>
        </div>

        <div class="card-container">
            <div class="profile-card">
                <div class="profile-image-wrapper">
                    <img id="profile-image" src="https://via.placeholder.com/150" alt="Avatar" class="profile-image">
                </div>
                <h2 class="profile-name">
                    <span id="profile-name">Nick</span>
                    <button id="edit-name-btn" class="edit-icon">✏️</button>
                </h2>
                <br>
                <div class="profile-info">
                    <h4>Nicolas Smith Pines</h4>
                    <h4>8 años</h4>
                    <h4>Eres hijo de John Smith</h4>
                </div>
                <button id="change-image-btn" class="edit-icon">Cambiar foto de perfil</button>
            </div>

            <div class="info-card">
                <h3 class="info-title">📝 Escribe sobre ti
                    <button id="edit-info-btn" class="edit-icon">✏️</button>
                </h3>
                <p id="info-text" class="info-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id est, unde exercitationem, rerum perspiciatis deleniti.
                </p>
            </div>

            <div class="recent-topics-card">
                <h3 class="topics-title">📚 Temas recientes</h3>
                <ul class="topics-list">
                    <li class="topic-item">
                        <img src="https://via.placeholder.com/20" alt="Matemáticas" class="topic-image"> Matemáticas
                    </li>
                    <li class="topic-item">
                        <img src="https://via.placeholder.com/20" alt="Ciencias sociales" class="topic-image"> Ciencias sociales
                    </li>
                    <li class="topic-item">
                        <img src="https://via.placeholder.com/20" alt="Astronomía" class="topic-image"> Astronomía
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Modal de edición de nombre -->
    <div id="name-modal" class="modal hidden">
        <div class="modal-content">
            <h2 class="modal-title">Editar nombre</h2>
            <form id="name-form" class="form">
                <input id="name-input" class="input-field" type="text" placeholder="Escribe el nuevo nombre" required />
                <button type="submit" class="submit-btn">Guardar nombre</button>
                <button type="button" class="cancel-btn" id="cancel-name-btn">Cancelar</button>
            </form>
        </div>
    </div>

    <!-- Modal de edición de información -->
    <div id="info-modal" class="modal hidden">
        <div class="modal-content">
            <h2 class="modal-title">Editar información</h2>
            <form id="info-form" class="form">
                <textarea id="info-input" class="textarea-field" rows="4" placeholder="Escribe tu información aquí" required></textarea>
                <button type="submit" class="submit-btn">Guardar información</button>
                <button type="button" class="cancel-btn" id="cancel-info-btn">Cancelar</button>
            </form>
        </div>
    </div>

    <!-- Modal de cambio de imagen -->
    <div id="image-modal" class="modal hidden">
        <div class="modal-content">
            <h2 class="modal-title">Cambiar foto de perfil</h2>
            <form id="image-form" class="form">
                <input type="file" id="image-input" accept="image/*" class="input-field" />
                <button type="submit" class="submit-btn">Guardar imagen</button>
                <button type="button" class="cancel-btn" id="cancel-image-btn">Cancelar</button>
            </form>
        </div>
    </div>

    @include('layouts.footer')

    @endsection

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar datos almacenados
            const storedName = localStorage.getItem('profileName');
            const storedInfo = localStorage.getItem('profileInfo');
            const storedImage = localStorage.getItem('profileImage');

            if (storedName) {
                document.getElementById('profile-name').innerText = storedName;
                document.getElementById('header-name').innerText = storedName;
            }
            if (storedInfo) {
                document.getElementById('info-text').innerText = storedInfo;
            }
            if (storedImage) {
                document.getElementById('profile-image').src = storedImage;
            }

            // Funciones para el modal de nombre
            const nameModal = document.getElementById('name-modal');
            const editNameBtn = document.getElementById('edit-name-btn');
            const nameForm = document.getElementById('name-form');
            const cancelNameBtn = document.getElementById('cancel-name-btn');

            editNameBtn.addEventListener('click', function() {
                nameModal.classList.remove('hidden');
                document.getElementById('name-input').value = document.getElementById('profile-name').innerText;
            });

            cancelNameBtn.addEventListener('click', function() {
                nameModal.classList.add('hidden');
            });

            nameForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const newName = document.getElementById('name-input').value;
                document.getElementById('profile-name').innerText = newName;
                document.getElementById('header-name').innerText = newName;
                localStorage.setItem('profileName', newName);
                nameModal.classList.add('hidden');
            });

            // Funciones para el modal de información
            const infoModal = document.getElementById('info-modal');
            const editInfoBtn = document.getElementById('edit-info-btn');
            const infoForm = document.getElementById('info-form');
            const cancelInfoBtn = document.getElementById('cancel-info-btn');

            editInfoBtn.addEventListener('click', function() {
                infoModal.classList.remove('hidden');
                document.getElementById('info-input').value = document.getElementById('info-text').innerText;
            });

            cancelInfoBtn.addEventListener('click', function() {
                infoModal.classList.add('hidden');
            });

            infoForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const newInfo = document.getElementById('info-input').value;
                document.getElementById('info-text').innerText = newInfo;
                localStorage.setItem('profileInfo', newInfo);
                infoModal.classList.add('hidden');
            });

            // Funciones para el modal de imagen
            const imageModal = document.getElementById('image-modal');
            const changeImageBtn = document.getElementById('change-image-btn');
            const imageForm = document.getElementById('image-form');
            const cancelImageBtn = document.getElementById('cancel-image-btn');

            changeImageBtn.addEventListener('click', function() {
                imageModal.classList.remove('hidden');
            });

            cancelImageBtn.addEventListener('click', function() {
                imageModal.classList.add('hidden');
            });

            imageForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const file = document.getElementById('image-input').files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onloadend = function() {
                        const imageDataUrl = reader.result;
                        document.getElementById('profile-image').src = imageDataUrl;
                        localStorage.setItem('profileImage', imageDataUrl);
                    };
                    reader.readAsDataURL(file);
                }
                imageModal.classList.add('hidden');
            });
        });
    </script>




