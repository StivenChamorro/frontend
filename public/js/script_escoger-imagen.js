document.addEventListener('DOMContentLoaded', function() {
    let mirar_imagenes = document.getElementById("mirar_imagenes");
    let cambiar_imagen = document.getElementById("cambiar_imagen");
    let cancelar_cambiar_imagen = document.getElementById("cancelar_cambiar_imagen")
    let aceptar_cambiar_imagen = document.getElementById("aceptar_cambiar_imagen")
    const foto_actual = document.querySelector('.foto_actual')
    const foto_disponible = document.querySelectorAll('.foto_disponible')
    

    mirar_imagenes.addEventListener('click', function() {
        cambiar_imagen.classList.toggle("open-menu");
    });

    cancelar_cambiar_imagen.addEventListener('click', function() {
        cambiar_imagen.classList.remove("open-menu");
    });

    aceptar_cambiar_imagen.addEventListener('click', function() {
        cambiar_imagen.classList.remove("open-menu");
    });

    foto_disponible.forEach(disponible=>{
    disponible.addEventListener('click', function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        this.classList.add('active')
        foto_actual.src = this.src
        })
    })
});