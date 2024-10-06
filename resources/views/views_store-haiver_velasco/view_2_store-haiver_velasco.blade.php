@extends('layouts.header_tienda')

@section('content')
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
    @include('layouts.footer')
</body>
</html>
@endsection