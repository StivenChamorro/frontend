document.addEventListener('DOMContentLoaded', function() {
    const editNameBtn = document.getElementById('edit-name-btn');
    const editInfoBtn = document.getElementById('edit-info-btn');
    const changeImageBtn = document.getElementById('change-image-btn');
    const nameModal = document.getElementById('name-modal');
    const infoModal = document.getElementById('info-modal');
    const imageModal = document.getElementById('image-modal');
    const cancelNameBtn = document.getElementById('cancel-name-btn');
    const cancelInfoBtn = document.getElementById('cancel-info-btn');
    const cancelImageBtn = document.getElementById('cancel-image-btn');

    function openModal(modal) {
        modal.style.display = 'block';
    }

    function closeModal(modal) {
        modal.style.display = 'none';
    }

    editNameBtn.addEventListener('click', () => openModal(nameModal));
    editInfoBtn.addEventListener('click', () => openModal(infoModal));
    changeImageBtn.addEventListener('click', () => openModal(imageModal));

    cancelNameBtn.addEventListener('click', () => closeModal(nameModal));
    cancelInfoBtn.addEventListener('click', () => closeModal(infoModal));
    cancelImageBtn.addEventListener('click', () => closeModal(imageModal));

    // Cerrar modales al hacer clic fuera de ellos
    window.addEventListener('click', function(event) {
        if (event.target === nameModal) closeModal(nameModal);
        if (event.target === infoModal) closeModal(infoModal);
        if (event.target === imageModal) closeModal(imageModal);
    });

    // Manejar envío de formularios
    document.getElementById('name-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const newName = document.getElementById('name-input').value;
        document.getElementById('profile-name').textContent = newName;
        document.getElementById('header-name').textContent = newName;
        closeModal(nameModal);
    });

    document.getElementById('info-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const newInfo = document.getElementById('info-input').value;
        document.getElementById('info-text').textContent = newInfo;
        closeModal(infoModal);
    });

    document.getElementById('image-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const newImage = document.getElementById('image-input').files[0];
        if (newImage) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-image').src = e.target.result;
            };
            reader.readAsDataURL(newImage);
        }
        closeModal(imageModal);
    });
});