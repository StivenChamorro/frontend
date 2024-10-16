
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/game/game.css')}}">
    <title>Dinosaurio Chrome V2</title>
    
</head>
<body>

    <div class="contenedor">

        <div class="suelo"></div>
        
        <div class="dino dino-corriendo"></div>

        <div class="score">0</div>
        <audio src="{{asset('sound/sound_gamedino/salto.mp3')}}" class="audio-salto"></audio>
        <audio src="{{asset('sound/sound_gamedino/gameOver.mp3')}}" class="audio-gameOver"></audio>

    </div>

    <div class="game-over">GAME OVER</div>
    
    <script src="{{asset('js/script_game.js')}}"></script>


</body>
</html>
