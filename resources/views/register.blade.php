@extends('layouts.header1')

@section('custom_css')

    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">

@endsection

@section('content')

<body>
    <main class="main-container">
        <div class="content-container">
            <div class="form-container">
                <h1 class="title">Regístrate</h1>
                <form action="#" class="form">
                    <!-- Nombres y Apellidos en una fila -->
                    <div class="input-row">
                        <div class="input-container2">
                            <label class="input-label">Nombres</label>
                            <input class="input-field2" placeholder="Ingresar Nombres">
                        </div>
                        <div class="input-container2">
                            <label class="input-label">Apellidos</label>
                            <input class="input-field2" placeholder="Ingresar Apellidos">
                        </div>
                    </div>

                    <!-- Fecha de Nacimiento -->
                    <div class="input-container">
                        <label class="input-label">Fecha de Nacimiento</label>
                        <input type="date" class="input-field">
                    </div>

                    <!-- Correo Electrónico -->
                    <div class="input-container">
                        <label class="input-label">Correo Electrónico</label>
                        <input type="email" class="input-field" placeholder="Ingresar Correo Electrónico">
                    </div>

                    <!-- Usuario -->
                    <div class="input-container">
                        <label class="input-label">Usuario</label>
                        <input class="input-field" placeholder="Ingresar Usuario">
                    </div>

                    <!-- Contraseña -->
                    <div class="input-container">
                        <label class="input-label">Contraseña</label>
                        <input type="password" class="input-field" placeholder="Ingresar Contraseña">
                    </div>

                    <!-- PIN -->
                    <div class="input-container">
                        <label class="input-label">PIN</label>
                        <input type="password" class="input-field" placeholder="Ingresar PIN">
                    </div>

                    <!-- Botón Registrarme -->
                    
                    <div class="button-container">
                        <a class="register-button" href="{{route('terms')}}">Registrarme</a>
                    </div>
                    
                </form>
            </div>

            <div class="image-container">
                <img src="img/register_image.png" alt="Registro" class="register-image">
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>

@endsection