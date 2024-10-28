@extends('layouts.header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/profilechildren.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main-container">
        <div class="header-image" style="background-image: url('img/bg_child.png');">
            <div class="overlay-text">
                <h1 class="header-title">¡Hola!</h1>
                <p class="header-subtitle">Nick</p>
            </div>
        </div>

        <div class="card-container">
            <div class="profile-card">
                <div class="profile-image-wrapper">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="profile-image">
                </div>
                <h2 class="profile-name">
                    <span id="profile-name">Nick</span>
                    <button id="edit-name-btn" class="edit-icon" onclick="openNameModal()">✏️</button>
                </h2>
                <br>
                <div class="profile-info">
                    <h4>Nicolas Smith Pines</h4>
                    <h4>8 años</h4>
                    <h4>Eres hijo de John Smith</h4>
                </div>
            </div>

            <!-- Modal de edición de nombre -->
            <div id="profile-edit-modal" class="modal">
                <div class="modal-content">
                    <h2 class="modal-title">Editar nombre</h2>
                    <form id="name-form" class="form" onsubmit="saveName(event)">
                        <input id="name-input" class="input-field" type="text" placeholder="Escribe el nuevo nombre" required />
                        <button type="submit" class="submit-btn">Guardar nombre</button>
                        <button type="button" class="cancel-btn" onclick="closeNameModal()">Cancelar</button>
                    </form>
                </div>
            </div>

            <div class="info-card">
                <h3 class="info-title">📝 Escribe sobre ti
                    <button id="edit-btn" class="edit-icon" onclick="openInfoModal()">✏️</button>
                </h3>
                <p id="info-text" class="info-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id est, unde exercitationem, rerum perspiciatis deleniti.
                </p>
            </div>

            <!-- Modal de edición de información -->
            <div id="info-edit-modal" class="modal">
                <div class="modal-content">
                    <h2 class="modal-title">Editar información</h2>
                    <form id="info-form" class="form" onsubmit="saveInfo(event)">
                        <textarea id="info-input" class="textarea-field" rows="4" placeholder="Escribe tu información aquí" required></textarea>
                        <button type="submit" class="submit-btn">Guardar información</button>
                        <button type="button" class="cancel-btn" onclick="closeInfoModal()">Cancelar</button>
                    </form>
                </div>
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

    @include('layouts.footer')

    <script>
        // Abrir el modal de nombre
        function openNameModal() {
            document.getElementById('profile-edit-modal').classList.remove('hidden');
            document.getElementById('name-input').value = document.getElementById('profile-name').innerText;
        }

        // Cerrar el modal de nombre
        function closeNameModal() {
            document.getElementById('profile-edit-modal').classList.add('hidden');
            document.getElementById('name-input').value = ""; // Limpiar el campo al cerrar
        }

        // Guardar el nuevo nombre
        function saveName(event) {
            event.preventDefault();
            const newName = document.getElementById('name-input').value;
            document.getElementById('profile-name').innerText = newName;
            closeNameModal();
        }

        // Abrir el modal de información
        function openInfoModal() {
            document.getElementById('info-edit-modal').classList.remove('hidden');
            document.getElementById('info-input').value = document.getElementById('info-text').innerText;
        }

        // Cerrar el modal de información
        function closeInfoModal() {
            document.getElementById('info-edit-modal').classList.add('hidden');
            document.getElementById('info-input').value = ""; // Limpiar el campo al cerrar
        }

        // Guardar la nueva información
        function saveInfo(event) {
            event.preventDefault();
            const newInfo = document.getElementById('info-input').value;
            document.getElementById('info-text').innerText = newInfo;
            closeInfoModal();
        }
    </script>
</body>
</html>

@endsection
