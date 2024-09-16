<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
        {{-- Header --}}
        <header class="h-24 w-full bg-[#B43654] flex items-center ">
            <h1 class="text-5xl text-transparent font-bold relative ml-12" style="font-family: 'Press Start 2P' ">
                <!-- Texto con gradiente vertical encima -->
                <span class="absolute -top-1 -left-1 bg-gradient-to-b from-[#F7CD55] to-[#FCA142] bg-clip-text text-transparent">
                    WOOPERLAND
                </span>
                <!-- Sombra 3D debajo -->
                <span class="text-[#F2446B]">WOOPERLAND</span>
            </h1>
        </header>        
    {{-- Content --}}
    @yield('content')

        {{-- Footer --}}
    <footer  class="h-40 w-full bg-[#B43654] border-black">

    </footer>

</body>
</html>