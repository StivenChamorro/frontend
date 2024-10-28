const imagen = document.getElementById('pixel1');

// Función para cambiar la posición de la imagen
function cambiarPosicion() {
    const contenedor = document.getElementById('nivel');

    // Generar nuevas posiciones aleatorias
    // const maxWidth = contenedor.clientWidth - imagen.clientWidth;
    // const maxHeight = contenedor.clientHeight - imagen.clientHeight;

    // const nuevaPosX = Math.floor(Math.random() * maxWidth);
    // const nuevaPosY = Math.floor(Math.random() * maxHeight);

    // Aplicar nuevas posiciones
    // imagen.style.left = `${nuevaPosX}px`;
    // imagen.style.top = `${nuevaPosY}px`;
    imagen.style.left = `44%`;
    imagen.style.top = `58%`;
}

// Asignar la función al evento click de la imagen
imagen.addEventListener('click', cambiarPosicion);