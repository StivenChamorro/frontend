<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">

    <link rel="stylesheet" href= "{{asset('css/homestyle/style.css')}}">
</head>
<body>
    <header>
        <div class="logo">WOOPERLAND</div>
        <nav class="nav-container">
            <button class="nav-button">Tienda</button>
            <div class="separator"></div>
            <button class="nav-button">Avatares</button>
        </nav>
        <button class="button-profile">
             <img src="{{asset('imgs/imagenes_home/image.svg')}}" alt="" class="profile-img"> 
            <span><img src="{{asset('imgs/imagenes_home/arrow.svg')}}" alt="" class="arrow-profile"></span>
        </button>
    </header>

    <section class="modal">
        <div class="modal-container">
            <div class="head-modal">
                <img src="{{asset('imgs/imagenes_home/profile.svg')}}" alt="" class="img-modal">
                <span>Nick</span>
            </div>
            <div class="modal-options">
                <ul>
                    <li><a href="#profile"> <img src="{{asset('imgs/imagenes_home/profile-icon.svg')}}" alt="" class="profile-icon"> Tu Perfil</a></li>
                    <li><a href="#change-player"><img src="{{asset('imgs/imagenes_home/change-player.svg')}}" alt="" class="change-player-icon"> Cambiar de jugador</a></li>
                    <li><a href="#adult-profile"><img src="{{asset('imgs/imagenes_home/adult-profile.svg')}}" alt="" class="adult profile">Perfil Adulto</a></li>
                </ul>
            </div>
            <div class="foot-modal">
                <a href="#">
                    <img src="{{asset('imgs/imagenes_home/logout.svg')}}" alt="" class="icon-logout">
                    <span>Cerrar sesión</span>
                </a>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

    <section class="hero">
        <div class="hero-content">
            <img src="{{asset('imgs/imagenes_home/hero.svg')}}" alt="Wooper Character" class="img-hero">
            <div class="cta-title-content"><h2 class="cta-title">Bienvenidos a Wooperland!!</h2></div>
        </div>
    </section>

    <main>
        <section>
            <div class="wpland-content">
                <h2>¿Qué encontrarás en wooperland?</h2>
                <div class="line">
                    <p>En este espacio encontrarás divertidos test y minijuegos en los que aprenderás y te divertirás al mismo tiempo, adéntrate y explora los diferentes temas de aprendizaje que tenemos para ti :)</p>
                </div>
            </div>
        </section>

        <!-- carrusel pendiente -->
        
        <div class="description-container">
        <div class="description">
            <div class="text-container">
                <h2>Beneficios de aprender jugando</h2>
            <p>Aprender jugando es una forma divertida y efectiva de educación. A través del juego, los pequeños desarrollan habilidades cognitivas, sociales y emocionales. Les ayuda a resolver problemas, trabajar en equipo y potenciar su creatividad. Además, los juegos educativos refuerzan el aprendizaje de manera natural, lo que aumenta la retención y el entusiasmo por descubrir cosas nuevas. ¡Es la forma ideal de aprender mientras se divierten!</p>
            </div>
            <div class="img-container">
                <img src="{{asset('imgs/imagenes_home/kids.svg')}}" alt="Kids learning through play" class="kids-learning">
            </div>
        </div>

        <div class="description">
            <div class="img-container">
                <img src="{{asset('imgs/imagenes_home/minigame.svg')}}" alt="Minigame screenshot" class="kids-learning">
            </div>
            <div class="text-minigames">
                <h2>Prueba nuestro minijuego</h2>
                <p>¡No todo es tarea! A veces también hay que relajarse y divertirse. Dedicar tiempo a los juegos no solo es entretenido, sino que también puede ayudarte a mejorar la concentración. Equilibrar el trabajo con un buen rato de diversión es clave para sentirse bien y rendir mejor. Es por esa razón que Wooperland cuenta con un propio minijuego, nunca copiado</p>
            </div>
        </div>
        </div>
    </main>

    <footer class="wooperland-footer">
        <div class="footer-content">
          <div class="footer-left">
            <div class="logo2"><h2 class="footer-logo">WOOPERLAND</h2></div>
            <div class="social-icons">
              <a href="#" class="social-icon instagram"></a>
              <a href="#" class="social-icon youtube"></a>
              <a href="#" class="social-icon facebook"></a>
            </div>
          </div>
          <div class="footer-right">
            <div class="legal"><h3>Legal</h3></div>
            <ul>
              <li><a href="#">Términos de uso</a></li>
              <li><a href="#">Política de Cookies</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <p>© 2024 Wooperland - Todos los derechos reservados</p>
        </div>
      </footer>
</body>
</html>