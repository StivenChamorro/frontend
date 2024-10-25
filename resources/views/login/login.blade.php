@extends('layouts.header1')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>
<body style="font-family: 'Happy Monkey', sans-serif;">
    <main class="main-background">
        <div class="container">
            <!-- Imagen solo visible en pantallas grandes -->
            <div class="image-container">
                <img src="img/login_image.png" class="image">
            </div>
            <!-- Formulario centrado en todas las pantallas -->
            <div class="form-container">
                <h1 class="form-title">INICIAR SESIÓN</h1>
                
                <form action="" class="form-grid">
                    <div class="input-group">
                        <label class="label">Nombre de Usuario:</label>
                        <input type="text" class="input" placeholder="Ingresar Nombre de Usuario...">
                    </div>

                    <div class="input-group">
                        <label class="label">Contraseña:</label>
                        <input type="password" class="input" placeholder="Ingresar Contraseña">
                    </div>

                    <div class="button-container">
                        <button class="submit-button">Iniciar Sesión</button>
                    </div>
                </form>

                <div>
                    <p class="register-text">¿No tienes cuenta?
                        <a href="registro.html" class="register-link">Regístrate</a>
                    </p>
                </div>

                <div class="google-button-container">
                    <button class="google-button">
                        <i class="fab fa-google google-icon"></i>
                        Continuar con Google
                    </button>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>

@endsection