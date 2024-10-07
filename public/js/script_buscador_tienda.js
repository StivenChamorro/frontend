// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Obtiene el input de búsqueda y el contenedor de imágenes
    const searchInput = document.getElementById('buscador');
    const contenedorImgs = document.getElementById('contedido_buscador');
    const imgStores = contenedorImgs.getElementsByClassName('IMG_STORE');

    // Función para realizar la búsqueda
    function buscar() {
        const searchTerm = searchInput.value.toLowerCase();

        // Itera sobre cada elemento IMG_STORE
        Array.from(imgStores).forEach(function(imgStore) {
            const nombreImagen = imgStore.querySelector('.Nombre_Imagen').textContent.toLowerCase();
            const costoImagen = imgStore.querySelector('.costo_imagen').textContent.toLowerCase();
            
            // Comprueba si el término de búsqueda está en el nombre o en el costo
            if (nombreImagen.includes(searchTerm) || costoImagen.includes(searchTerm)) {
                imgStore.style.display = ''; // Muestra el elemento
            } else {
                imgStore.style.display = 'none'; // Oculta el elemento
            }
        });
    }

    // Añade el evento 'input' al campo de búsqueda
    searchInput.addEventListener('input', buscar);

});