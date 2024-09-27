<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/achievements-haiver_velasco/vista_1_achievements-haiver_velasco.css') }}"/>
    <script src={{ asset('js/script_desplegable-perfil.js')}}></script>
    <script src={{ asset('js/script_desplegable-tema.js')}}></script>
    <script src={{ asset('js/script_escoger-imagen.js')}}></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet"/>
  </head>
  <body>
    <!-- {{-- Encabezado --}} -->
    <header>
      <div class="contenedor_header-store">
        <div class="logo_header">
          <img
            class="logo"
            src="{{asset('imgs/imgs_store-haiver_velasco/wooperland_titulo.png')}}"
            alt="titulo-wooperland"
          />
        </div>
        
        <div class="tienda_avatares">
          <button class="boton-tienda"><a href="{{route('vista_3_store')}}"> Tienda</a></button>
          <div class="barra_tienda_avatares"></div>
          <button class="boton-avatares" id="mirar_imagenes"> Avatares</button>

          <div class="contenedor_cambiar_imagen" id="cambiar_imagen">
            <h1 class="titulo_cambiar_imagen">  Cambiar foto de perfil</h1>
            <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_escogida_cambiar_foto.png')}}" class="foto_actual">

            <div class="catalogo_fotos">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/dragon_catagolo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/wooperninja_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopercibor_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/superwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/ciberwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopercopa_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/woopernieve_catalogo_cambiar_foto.png')}}" class="foto_disponible">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/deadpoolwooper_catalogo_cambiar_foto.png')}}" class="foto_disponible active">
            </div>
            <button class="boton_aceptar" id="aceptar_cambiar_imagen"> Aceptar </button>
            <button class="boton_cancelar" id="cancelar_cambiar_imagen"> Cancelar </button>
        </div>
      </div>
        <div class="contenedor_desplegable_header" >
          <div class="img_perfil_header">
            <img src="{{asset('imgs/imgs_store-haiver_velasco/wooper_header.png')}}" id="menu_header">
          </div>

          <div class="menu_perfil_desplegable" id="menu_desplegado_header">
            <div class="nombre_usuario_desplegable">
                <img src="{{asset('imgs/imgs_store-haiver_velasco/wooper_header.png')}}" class="img_perfil_desplegable">
                <h1 class="texto_nombre_usuario_desplegable"> Nick</h1>
            </div>
            <div class="barra_1_desplegable"></div>
            <div class="container_perfil_desplegable_li">
                <ol>
                    <li> <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_perfil.png')}}" alt=""> Tu Perfil</li>
                    <li> <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_cambiar_jugador.png')}}" alt=""> Cambiar de Jugador</li>
                    <li> <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_perfil_adulto.png')}}" alt=""> Perfil Adulto</li>
                </ol>
            </div>
            <div class="barra_2_desplegable"></div>
            <div class="cerrar_sesion_desplegable">
                <img src="{{asset('imgs/imgs_achievements-haiver_velasco/img_cerrar_sesion.png')}}" alt="" class="img_cerrar_sesion_despleglable">
                <h1 class="texto_cerrar_sesion_desplegable">Cerrar Sessión</h1>
            </div>
            </div>        

          <div class="flecha_header"></div>
        </div>
      </div>
    </header>
    <!-- {{-- /Encabezado --}}  -->

    <!-- {{-- Contennido --}} -->
    <main>
      <div class="container_info_matematicas">
        <div class="matematicas" >
          <p class="titulo_matematicas" id="titulo_matematicas" > Matemáticas ﹀</p>

          <div class="desplegable_tema">
            <div class="menu" id="menu">
                <p class="elige_tema">Elige un Tema</p>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
                <div class="tema">
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas_desplegable.png')}}" alt="" class="img_tema">
                    <h1 class="titulo_tema"> MATEMATICAS</h1>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}" alt="" class="img_diamante_tema">
                    <h2 class="numero_diamantes_tema"> 120/1200</h2>
                    <img src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}" alt="" class="img_copa_tema">
                    <h2 class="numero_copas_tema">2</h2>
                </div>
            </div>
        </div>

          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/isla_matematicas.png')}}"
            alt=""
            class="img_matematicas"
          />
          <h1 class="texto_matematicas"></h1>

          </div>
          <div class="diamantes_jugador">
            <p class="titulo_diamantes">DIAMANTES DEL JUGADOR</p>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              alt=""
              class="img_diamante"
            />
            <h1 class="diamantes">120/1200</h1>
          </div>
          <div class="logros_completados">
            <p class="titulo_logros">LOGROS COMPLETADOS</p>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_copa.png')}}"
              alt=""
              class="img_copa"
            />
            <h1 class="logros">2/10</h1>
          </div>
        </div>
      </div>

      <div class="container_logros">
        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_wooper_logro.png')}}"
            alt="logro wooper"
          />
          <div class="info">
            <div class="logro_wooper">Super Wooper</div>
            <h1 class="numero_diamantes_wooper">20</h1>
            <div class="descripcion_wooper">
              Completa un nivel sin equivocarte ninguna vez
            </div>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro_wooper"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_franchesco_logro.png')}}"
            alt="logro_franchesco"
          />
          <div class="info">
            <div class="logro_franchesco">Franchesco es tres veces veloz</div>
            <h1 class="numero_diamantes_franchesco">20</h1>
            <div class="descripcion_franchesco">
              Completa el nivel 5 en menos de 2 minutos
            </div>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro_franchesco"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>

        <div class="product-card">
          <img
            src="{{asset('imgs/imgs_achievements-haiver_velasco/fondo_rectagulo_logro_bloqueado_.png')}}"
            alt="logro bloqueado"
          />
          <div class="info">
            <div class="logro">Compañerismo</div>
            <div class="descripcion">
              Utiliza la ayuda de wooper en un nivel
            </div>
            <h1 class="numero_diamantes">20</h1>
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/candado_logros_bloqueados.png')}}"
              class="candado_bloqueo"
              alt="candado logro bloqueado"
            />
            <img
              src="{{asset('imgs/imgs_achievements-haiver_velasco/icono_diamante_logro.png')}}"
              class="diamante_logro"
            />
          </div>
        </div>
      </div>
    </main>
    <!-- {{-- /Contennido --}}  -->

    <!-- {{-- Pie de Pagina --}} -->
    <footer>
      <div class="contenedor_footer">
        <div class="logos_footer">
          <img
            class="wooperland_footer"
            src="{{asset('imgs/imgs_store-haiver_velasco/wooperland_titulo.png')}}"
            alt="logo_wooperland_footer"
          />
          <h1 class="barra_1_footer">_______________________</h1>
          <img
            class="icono_instagran"
            src="{{asset('imgs/imgs_store-haiver_velasco/youtube_icono_footer.png')}}"
            alt="img instagran footer"
          />
          <img
            class="icono_youtube"
            src="{{asset('imgs/imgs_store-haiver_velasco/facebook_icono_footer.png')}}"
            alt="img youtube footer"
          />
          <img
            class="icono_facebook"
            src="{{asset('imgs/imgs_store-haiver_velasco/instagran_icono_footer.png')}}"
            alt="img facebook footer"
          />
        </div>
        <div class="barra_texto-footer">
          <h1 class="barra_2_footer">
            _____________________________________________________________________________________________________
          </h1>
          <h2 class="copyright_footer">
            @ 2024 Wooperland - Todos los derechos reservados
          </h2>
        </div>

        <div class="texto_footer">
          <h1 class="text_footer-1">Legal</h1>
          <h1 class="barra_3_footer">_____</h1>
          <ol class="lista_footer">
            <li><b>Terminos de Uso</b></li>
            <li class="text2"><b>Politica de Cookies</b></li>
            <li class="text3"><b>Politica de Privacidad</b></li>
          </ol>
        </div>
      </div>
    </footer>
    <!-- {{-- /Pie de Pagina --}} -->
  </body>
</html>
