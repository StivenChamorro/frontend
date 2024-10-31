@extends('layouts.header')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas para Niños</title>
    <script src="https://kit.fontawesome.com/58965c32f8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    @vite(['resources/views/layouts/css-layouts/nivel1.css', 'resources/js/animate.js'])
</head>
<body>
    <section class="hero">
        <div class="fondomatematicas">
            <img src="{{ asset('img/niveles/fondomatematicas.png')  }}" alt="fondo matematicas" class="img-hero">
        </div>
        <img id="mascota" src="{{asset('img/niveles/woopermatematico.png')}}" alt="woopermatematico">
        <img id="anuncio" src="{{asset('img/niveles/aprendemate.png')}}" alt="aprendemate">
    </section>

    <section class="informacion">
        <h2>¿Por qué matemáticas?</h2>
        <hr>
        <p>Las matemáticas son importantes para los niños porque les ayudan a desarrollar habilidades de pensamiento lógico y resolución de problemas. A través de las matemáticas, los niños aprenden a analizar situaciones, encontrar patrones y tomar decisiones basadas en datos. Estas habilidades no solo les sirven en la escuela, sino también en la vida cotidiana, como cuando deben repartir cantidades, medir objetos o manejar el dinero. Además, las matemáticas fomentan la creatividad al encontrar soluciones diferentes para un mismo problema, preparándolos para desafíos futuros.</p>
        <hr>
    </section>

    <section id="nivel" class="nivel">
        <div id="quiz-container" class="quiz-container">
            <header>
                <div class="question-counter">1 de 10</div>
                <button class="pause-button" aria-label="Pausar">
                    <img src="{{ asset('imgs/icon-pause.svg') }}" alt="" class="pause-icon" />
                </button>
            </header>
            <main>
                <div class="question-bubble">
                    <p></p>
                </div>
                <div class="equation">
                    <p></p>
                </div>
                <form class="answer-options">
                    <button type="button" class="answer-button"></button>
                    <button type="button" class="answer-button"></button>
                    <button type="button" class="answer-button"></button>
                    <button type="button" class="answer-button"></button>
                </form>
            </main>
            <footer>
                <div class="container-button">
                    <button class="help-button" aria-label="Ayuda">?</button>
                    <button class="audio-button" aria-label="Audio">
                        <img class="audio-img" src="{{ asset('imgs/audio-icon.svg') }}" alt="" />
                    </button>
                </div>
                <div class="timer">Tiempo: 00:00</div>
            </footer>
            <button class="next-button" style="display: none;">Siguiente Pregunta</button>
        </div>
    </section>

    <div class="relleno"></div>

    <script src="{{ asset('js/nivel1.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
@include('layouts.footer')
@endsection