<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooperland</title>

    <!-- estilo -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Referencia correcta a los archivos -->    
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <h1 class="wooperland-title">WOOPERLAND</h1>
    </header>

    <main>
            <section class="welcome-section">
                <div class="welcome-content">
                  <div class="welcome-text">
                    <h1>BIENVENIDOS A WOOPERLAND</h1>
                    <p>Encontrarás un mundo de aventuras mientras aprendes con Wooper</p>
                  </div>
                  <span class="character-group">
                    <img src="imagenes_index/image.png" alt="Wooper characters" class="characters-img">
                  </span>
                </div>
              </section>

            <section class="learn-section">
              <div class="learn-content">
                <h1 class="learn-wooperland">APRENDE CON WOOPER</h1>
              </div>
            </section>

            <section class="carousel-section">
              <div class="carousel-container">
                  <div class="carousel-wrapper">
                      <div class="carousel-slide">
                          <img src="imagenes_index/imagen1.svg" alt="Imagen 1">
                          <img src="imagenes_index/imagen2.svg" alt="Imagen 2">
                          <img src="imagenes_index/imagen3.svg" alt="Imagen 3">
                          <img src="imagenes_index/imagen4.svg" alt="Imagen 4">
                          <img src="imagenes_index/imagen5.svg" alt="Imagen 5">
                          <img src="imagenes_index/imagen6.svg" alt="Imagen 6">
                          <img src="imagenes_index/imagen7.svg" alt="Imagen 7">
                          <img src="imagenes_index/imagen8.svg" alt="Imagen 8">
                      </div>
                  </div>
                  <button class="carousel-button prev">&lt;</button>
                  <button class="carousel-button next">&gt;</button>
              </div>
              <script src="{{ asset('js/app.js') }}"></script>
          </section>

            <section class="nav-card-section">
              <div class="nav-cards-content">
                <div class="card">
                  <div class="image-content">
                    <img src="imagenes_index/obtenpistas.png" alt="img-card1">
                  </div>
                  <div class="footer-card">
                    <h1>¡Obtén pistas!</h1>
                  </div>
                </div>

                <div class="card">
                  <div class="image-content">
                    <img src="imagenes_index/exploratemas.png" alt="img-card2">
                  </div>
                  <div class="footer-card">
                    <h1>Explora diferentes temas</h1>
                  </div>
                </div>

                <div class="card">
                  <div class="image-content">
                    <img src="imagenes_index/ganarlogros.png" alt="img-card3">
                  </div>
                  <div class="footer-card">
                    <h1>Desbloquea logros</h1>
                  </div>
                </div>

              </div>
            </section>

            <section class="cta-section">
              <div class="cta-container">
              <div class="cta-text">
                  <h1>JUEGA Y PRUEBA WOOPERLAND YA</h1>
              </div>
              <div class="cta-button">
                  <a href="#"><button>JUGAR
                      <!-- <span class="arrow">➤</span> -->
                       <span><img src="imagenes_index/arrowPlay.png" alt="" class="arrow-play"></span>
                  </button></a>
              </div>
            </div>
          </section>

          <section class="app-download-section">
           <div class="app-downloand-container">
            <div class="download-box">
                <div class="left-text">
                    <h2>Descarga la app de Wooper</h2>
                    <p>Con la app de Wooper podrás disfrutar de las aventuras en cualquier momento y lugar.</p>
                </div>
                <div class="right-text">
                    <p>Descárgala en el siguiente link:</p>
                    <a href="http://woperland.com" target="_blank">http://woperland.com</a>
                </div>
            </div>
          </div>
        </section>
    </main>

    <footer>
      <div class="footer">
          <div class="logo"><h2>WOOPERLAND</h2></div>
          <div class="social-container">
              <p class="social-text">Siguenos en nuestras redes</p>
              <div class="social-icons">
                  <img src="imagenes_index/ig.logo.png" alt="Instagram" class="social-icon">
                  <img src="imagenes_index/yt.logo.png" alt="YouTube" class="social-icon">
                  <img src="imagenes_index/fc.logo.png" alt="Facebook" class="social-icon">
              </div>
          </div>
      </div>
      <div class="copyright"><p>© 2024 Wooperland</p></div>
      </footer>

</body>

</html>