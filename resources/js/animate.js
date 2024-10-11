
function moveImage(imageId) {
    const image = document.getElementById(imageId);
    const container = image.parentElement; // El div contenedor
    let position = 0; // Posición inicial
    const step = 10; // Cuánto se moverá la imagen en cada paso
    let direction = 0.3; // 0.1 para mover a la derecha

    function animate() {
        // Mueve la imagen
        position += step * direction; // Incrementa la posición horizontal

        // Verifica los límites del contenedor
        if (position + image.clientWidth > container.clientWidth || position < 0) {
            direction *= -1; // Cambia la dirección si llega a un límite
            position += step * direction; // Corrige la posición
        }

        image.style.transform = `translateX(${position}px)`; // Aplica la transformación

        // Mueve la imagen cada 100ms
        setTimeout(animate, 100);
    }

    // Iniciar la animación
    animate();
}

// Iniciar el movimiento de las tres imágenes
moveImage('movingImage1');
moveImage('movingImage2');
moveImage('movingImage3');

function moveImageRightToLeft(imageId) {
    const image = document.getElementById(imageId);
    const container = image.parentElement; // El div contenedor
    let position = container.clientWidth - image.clientWidth; // Posición inicial a la derecha
    const step = 10; // Cuánto se moverá la imagen en cada paso
    let direction = -0.5; // -1 para mover a la izquierda

    function animate() {
        // Mueve la imagen
        position += step * direction; // Decrementa la posición horizontal
        
        // Verifica los límites del contenedor
        if (position < 0 || position + image.clientWidth > container.clientWidth) {
            direction *= -1; // Cambia la dirección si llega a un límite
            position += step * direction; // Corrige la posición
        }
        
        image.style.transform = `translateX(${position}px)`; // Aplica la transformación

        // Mueve la imagen cada 100ms
        setTimeout(animate, 100);
    }

    // Iniciar la animación
    animate();
}

// Iniciar el movimiento de las tres imágenes de derecha a izquierda
moveImageRightToLeft('movingImage4');
moveImageRightToLeft('movingImage5');
moveImageRightToLeft('movingImage6');

document.getElementById('profilePicture').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        // Cambiar la fuente de la imagen por la imagen seleccionada
        document.getElementById('profileImage').src = e.target.result;
    };

    if (file) {
        reader.readAsDataURL(file); // Leer la imagen seleccionada como Data URL
    }
});

function startAnimations() {
    const isDesktop = window.innerWidth >= 1024;

    if (isDesktop) {
        // Aquí puedes agregar la lógica de tus animaciones
        const movingImage1 = document.getElementById('movingImage1');
        const movingImage2 = document.getElementById('movingImage2');
        const movingImage3 = document.getElementById('movingImage3');
        
        // Ejemplo simple de animación usando transform para mover las imágenes
        movingImage1.style.transform = 'translateX(50px)';
        movingImage2.style.transform = 'translateX(100px)';
        movingImage3.style.transform = 'translateX(150px)';
    }
}

window.addEventListener('resize', startAnimations);
window.addEventListener('load', startAnimations);

