@extends('layouts.header')

@section('custom_css')

<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/game/game.css')}}">

@endsection


@section('content')
<body>
    <div class="container1">
    <div class="contenedor">
        <div class="suelo"></div>
        <div class="dino dino-corriendo"></div>
        <div class="score">0</div>
        <audio src="{{asset('sound/sound_gamedino/salto.mp3')}}" class="audio-salto"></audio>
        <audio src="{{asset('sound/sound_gamedino/gameOver.mp3')}}" class="audio-gameOver"></audio>
    </div>
    <div class="game-over">
        GAME OVER
        <button id="retry-button">Retry</button>
    </div>
    </div>
    
    <script src="{{asset('js/script_game.js')}}"></script>

</body>

@endsection