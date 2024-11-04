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

    <script src="{{asset('js/profilechildren.js')}}"></script>

    @include('layouts.footer')

    @endsection

    




