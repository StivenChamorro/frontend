@extends('layouts.header&footer')
@section('content')
{{-- Content --}}
<main class="h-full w-full bg-gradient-to-b from-[#FFD166] to-[#F78C6B]" style="font-family: 'Happy Monkey'">
    <div class="h-full flex justify-center items-center desktop:pb-20">
        {{-- Imagen solo visible en pantallas grandes --}}
        <div class="hidden desktop:flex w-2/5 h-[95%] my-12 ml-2 pb-8 desktop:mt-40">
                <img src="{{asset('img/terms_image.png')}}" class="h-[90%] w-full rounded-l-lg">
            </div>
            <div class="desktop:w-1/2 desktop:h-[90%] bg-gradient-to-b from-[#EF476F] to-[#892940] rounded-2xl tablet:h-[90%] mobile:h-11/12 desktop:px-8 mobile:w-[96%] overflow-hidden mobile:mt-0 mobile:p-2">
                <h1 class="text-center text-white text-3xl p-2">Términos y Condiciones</h1>
                
                <div class="text-white text-lg overflow-y-auto mobile:h-[60%] tablet:h-[74%] p-4 mobile:p-2">
                    
                    <h2 class="text-3xl mb-4">Bienvenido a Wooperland</h2>
                    <p>
                        Al acceder y utilizar la aplicación Wooperland, aceptas cumplir con los siguientes términos y condiciones. 
                        Wooperland es una aplicación educativa diseñada para niños, donde pueden aprender a través del juego.
                    </p>
            
                    <h3 class="text-2xl mt-4 mb-2">1. Uso adecuado</h3>
                    <p>
                        Wooperland está destinada a niños y debe ser utilizada con fines educativos. Los usuarios no deben emplear la aplicación para actividades que no estén relacionadas con el aprendizaje.
                    </p>
            
                    <h3 class="text-2xl mt-4 mb-2">2. Privacidad de los niños</h3>
                    <p>
                        Respetamos la privacidad de los niños. Cualquier información proporcionada en la aplicación será utilizada exclusivamente para mejorar la experiencia de aprendizaje. No compartimos ni vendemos la información personal de los usuarios a terceros.
                    </p>
            
                    <h3 class="text-2xl mt-4 mb-2">3. Actualizaciones de contenido</h3>
                    <p>
                        Wooperland puede actualizar sus contenidos y funcionalidades de vez en cuando para mejorar la experiencia del usuario. Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento.
                    </p>
            
                    <h3 class="text-2xl mt-4 mb-2">4. Responsabilidad del usuario</h3>
                    <p>
                        Los padres y tutores son responsables de supervisar el uso de Wooperland por parte de los niños. La aplicación no es responsable por cualquier mal uso de la misma.
                    </p>
            
                    <h3 class="text-2xl mt-4 mb-2">5. Contacto</h3>
                    <p>
                        Si tienes alguna pregunta o inquietud sobre estos términos, puedes contactarnos a través de nuestro soporte en la aplicación.
                    </p>            
                </div>                
                <!-- Checkbox para aceptar los términos -->
                <div class="flex items-center justify-center mt-6">
                    <input type="checkbox" id="acceptTerms" class="mr-2 h-6 w-6 rounded-md">
                    <label for="acceptTerms" class="text-white text-2xl mobile:text-xl">Acepto los Términos y Condiciones</label>
                </div>
                <!-- Botón Continuar -->
                <div class="flex justify-center mt-4">
                    <button class="w-1/3 p-4 bg-[#FFD166] text-black rounded-3xl text-2xl mobile:text-xl border-2 border-black shadow-md shadow-black hover:text-white">
                        Continuar
                    </button>
                </div>
            </div>
            
        </div>
    </main>
@endsection