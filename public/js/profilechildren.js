document.addEventListener('DOMContentLoaded', function() {
    // Cargar datos almacenados
    const storedName = localStorage.getItem('profileName');
    const storedInfo = localStorage.getItem('profileInfo');
    const storedImage = localStorage.getItem('profileImage');

    if (storedName) {
        document.getElementById('profile-name').innerText = storedName;
        document.getElementById('header-name').innerText = storedName;
    }
    if (storedInfo) {
        document.getElementById('info-text').innerText = storedInfo;
    }
    if (storedImage) {
        document.getElementById('profile-image').src = storedImage;
    }

    // Funciones para el modal de nombre
    const nameModal = document.getElementById('name-modal');
    const editNameBtn = document.getElementById('edit-name-btn');
    const nameForm = document.getElementById('name-form');
    const cancelNameBtn = document.getElementById('cancel-name-btn');

    editNameBtn.addEventListener('click', function() {
        nameModal.classList.remove('hidden');
        document.getElementById('name-input').value = document.getElementById('profile-name').innerText;
    });

    cancelNameBtn.addEventListener('click', function() {
        nameModal.classList.add('hidden');
    });

    nameForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const newName = document.getElementById('name-input').value;
        document.getElementById('profile-name').innerText = newName;
        document.getElementById('header-name').innerText = newName;
        localStorage.setItem('profileName', newName);
        nameModal.classList.add('hidden');
    });

    // Funciones para el modal de información
    const infoModal = document.getElementById('info-modal');
    const editInfoBtn = document.getElementById('edit-info-btn');
    const infoForm = document.getElementById('info-form');
    const cancelInfoBtn = document.getElementById('cancel-info-btn');

    editInfoBtn.addEventListener('click', function() {
        infoModal.classList.remove('hidden');
        document.getElementById('info-input').value = document.getElementById('info-text').innerText;
    });

    cancelInfoBtn.addEventListener('click', function() {
        infoModal.classList.add('hidden');
    });

    infoForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const newInfo = document.getElementById('info-input').value;
        document.getElementById('info-text').innerText = newInfo;
        localStorage.setItem('profileInfo', newInfo);
        infoModal.classList.add('hidden');
    });

    // Funciones para el modal de imagen
    const imageModal = document.getElementById('image-modal');
    const changeImageBtn = document.getElementById('change-image-btn');
    const imageForm = document.getElementById('image-form');
    const cancelImageBtn = document.getElementById('cancel-image-btn');

    changeImageBtn.addEventListener('click', function() {
        imageModal.classList.remove('hidden');
    });

    cancelImageBtn.addEventListener('click', function() {
        imageModal.classList.add('hidden');
    });

    imageForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const file = document.getElementById('image-input').files[0];
        if (file) {
            const reader = new FileReader();
            reader.onloadend = function() {
                const imageDataUrl = reader.result;
                document.getElementById('profile-image').src = imageDataUrl;
                localStorage.setItem('profileImage', imageDataUrl);
            };
            reader.readAsDataURL(file);
        }
        imageModal.classList.add('hidden');
    });
});