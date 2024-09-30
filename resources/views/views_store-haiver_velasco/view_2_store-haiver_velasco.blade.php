<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STORE VIEW 2 </title>
    <link rel="stylesheet" href="{{ asset('css/Tienda-haiver_velasco.css/vista_2_tienda-haiver_velasco.css') }}">
    <script src="{{ asset('js/desplegable_header-haiver_velasco.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>

<body>
{{-- Encabezado --}}
    <header>
        <div class="contenedor_header-store">
            <div class="logo_header">
                <img class="logo"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/wooperland_titulo.png') }}"alt="titulo-wooperland">
            </div>
            <div class="input-header">
                <input type="text" placeholder="           example: wooper Superheroe" alt="input_header_wooperland">
                <div class="barra_input_header"></div>
                <img src="{{ asset('imgs/imgs_store-haiver_velasco/lupa_header.png') }}" alt="lupa_header_wooperland">
            </div>
            <div class="tienda_avatares">
                <button class="boton-tienda"> <a href=""> Tienda</a></button>
                <div class="barra_tienda-avatares"></div>
                <button class="boton-avatares"> <a href=""> Avatares</a></button>
            </div>
            <div class="contenedor_desplegable_header">
                <div class="img_perfil_header">
                    <img src="{{ asset('imgs/imgs_store-haiver_velasco/wooper_header.png') }}" alt="wooper_mamado">
                </div>
                <div class="flecha_header"></div>
            </div>
        </div>
    </header>
{{-- /Encabezado --}}

{{-- Contennido --}}
    <main>
        <div class="contenedor_main">

            <div class="titulo_store">
                <h1 class="titulo">Tienda de Wooper</h1s=>
            </div>
            <div class="barra_4_main"></div>
            <div class="descripcion_store">
                <h1 class="text_descripcion_store">
                    En esta tienda encontrarás una amplia variedad de avatares para personalizar tu perfil a tu
                    manera.
                    Wooper no es solo un ajolote cualquiera, ¡es todo lo que puedas imaginar! Desde bombero,
                    florista y
                    campeón de trofeos, hasta un samurái maestro en sables o un cyber-wooper llegado del futuro.
                    Explora
                    todas las increíbles versiones de Wooper y lleva tu imaginación al siguiente nivel. ¡Elige tu
                    favorito y destaca con estilo!
                </h1>
            </div>

            <img class="img_store_descripcion" src="{{ asset('imgs/imgs_store-haiver_velasco/img_descripcion.png') }}"
                alt="img referente a la tienda">
            <div class="barra_5_main"></div>
            <div class="contenedor_tus_diamantes">
                <h1 class="texto_tus-diamantes"> Tus Diamantes </h1>
                <div class="diamantes">
                    <h1 class="texto_diamantes_boton"> 1,000 💎</h1>
                </div>
            </div>
            <div class="barra_6_main"></div>

            <div class="contenedor_imgs_store">
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/1_img_store.png') }}">
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/2_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/3_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/4_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/5_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/6_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/7_img-store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/8_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/9_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/10_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/11_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/12_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/13_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/14_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
                <div class="IMG_STORE">
                    <img class="product_store" src="{{ asset('imgs/imgs_store-haiver_velasco/15_img_store.png') }}">
                    <img class="candado" src="{{ asset('imgs/imgs_store-haiver_velasco/img_candado.png') }}"
                        alt="candado de bloqueo">
                    <h1 class="costo_imagen"> 300 💎</h1>
                    <h2 class="Nombre_Imagen"> Lorem ipsum </h2>
                </div>
            </div>
        </div>
    </main>
{{-- /Contennido --}}

{{-- Pie de Pagina --}}
    <footer>
        <div class="contenedor_footer">
            <div class="logos_footer">
                <img class="wooperland_footer"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/wooperland_titulo.png') }}"
                    alt="logo_wooperland_footer">
                <h1 class="barra_1_footer"> _______________________</h1>
                <img class="icono_instagran"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/instagran_icono_footer.png') }}"
                    alt="img instagran footer">
                <img class="icono_youtube"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/youtube_icono_footer.png') }}"
                    alt="img youtube footer">
                <img class="icono_facebook"
                    src="{{ asset('imgs/imgs_store-haiver_velasco/facebook_icono_footer.png') }}"
                    alt="img facebook footer">
            </div>
            <div class="barra_texto-footer">
                <h1 class="barra_2_footer">
                    _____________________________________________________________________________________________________
                </h1>
                <h2 class="copyright_footer">@ 2024 Wooperland - Todos los derechos reservados</h2>
            </div>

            <div class="texto_footer">
                <h1 class="text_footer-1"> Legal</h1>
                <h1 class="barra_3_footer"> _____</h1>
                <ol class="lista_footer">
                    <li><b>Terminos de Uso</b></li>
                    <li class="text2"><b>Politica de Cookies</b></li>
                    <li class="text3"><b>Politica de Privacidad</b></li>
                </ol>
            </div>
        </div>
    </footer>
{{-- /Pie de Pagina --}}
</body>

</html>
