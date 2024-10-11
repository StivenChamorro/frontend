
function moveImage(imageId) {
    const image = document.getElementById(imageId);
    const container = image.parentElement;
    let position = 0; // Posición inicial
    const step = 10; // Cuánto se moverá la imagen en cada paso
    let direction = 0.5; //Fija la velocida y la orientacion en la que se mueven los elementos

    function animate() {
        // Mueve la imagen
        position += step * direction; // Incrementa la posición horizontal

        // Verifica los límites del contenedor
        if (position + image.clientWidth > container.clientWidth || position < 0) {
            direction *= -1; // Cambia la dirección si llega a un límite
            position += step * direction; // Corrige la posición
        }

        image.style.transform = `translateX(${position}px)`;

        // Mueve la imagen cada 100ms
        setTimeout(animate, 100);
    }

    animate();
}

moveImage('movingImage1');
moveImage('movingImage3');
moveImage('movingImage5');

function moveImageRightToLeft(imageId) {
    const image = document.getElementById(imageId);
    const container = image.parentElement; 
    let position = container.clientWidth - image.clientWidth; // Posición inicial
    const step = 10; // Cuánto se moverá la imagen en cada paso
    let direction = -0.5; //Fija la velocida y la orientacion en la que se mueven los elementos

    function animate() {
        // Mueve la imagen
        position += step * direction;
        
        // Verifica los límites del contenedor
        if (position < 0 || position + image.clientWidth > container.clientWidth) {
            direction *= -1; // Cambia la dirección si llega a un límite
            position += step * direction; // Corrige la posición
        }
        
        image.style.transform = `translateX(${position}px)`; 

        // Mueve la imagen cada 100ms
        setTimeout(animate, 100);
    }

    animate();
}

moveImageRightToLeft('movingImage2');
moveImageRightToLeft('movingImage4');
moveImageRightToLeft('movingImage6');

document.getElementById('profilePicture').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        
        document.getElementById('profileImage').src = e.target.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    }
});

function startAnimations() {
    const isDesktop = window.innerWidth >= 1024;

    if (isDesktop) {
        
        const movingImage1 = document.getElementById('movingImage1');
        const movingImage2 = document.getElementById('movingImage2');
        const movingImage3 = document.getElementById('movingImage3');
        
        movingImage1.style.transform = 'translateX(50px)';
        movingImage2.style.transform = 'translateX(100px)';
        movingImage3.style.transform = 'translateX(150px)';
    }
}

window.addEventListener('resize', startAnimations);
window.addEventListener('load', startAnimations);

