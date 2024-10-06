import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const slide = document.querySelector('.carousel-slide');
    const images = slide.querySelectorAll('img');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    let counter = 0;
    const size = slide.clientWidth;

    function updateSlidePosition() {
        slide.style.transform = `translateX(${-size * counter}px)`;
    }

    function moveSlide(direction) {
        if (direction === 'next') {
            counter = (counter + 1) % images.length;
        } else {
            counter = (counter - 1 + images.length) % images.length;
        }
        updateSlidePosition();
    }

    nextButton.addEventListener('click', () => moveSlide('next'));
    prevButton.addEventListener('click', () => moveSlide('prev'));

    window.addEventListener('resize', () => {
        images.forEach(img => img.style.width = `${slide.clientWidth}px`);
        updateSlidePosition();
    });

    // Inicializar tamaños
    images.forEach(img => img.style.width = `${slide.clientWidth}px`);
    updateSlidePosition();
});