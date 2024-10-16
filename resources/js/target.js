function openNameModal() {
    document.getElementById('profile-edit-modal').classList.remove('hidden');
}

function closeNameModal() {
    document.getElementById('profile-edit-modal').classList.add('hidden');
}

function saveName(event) {
    event.preventDefault();
    const newName = document.getElementById('name-input').value;
    document.getElementById('profile-name').innerText = newName;
    closeNameModal();
}

function openInfoModal() {
    document.getElementById('info-edit-modal').classList.remove('hidden');
    document.getElementById('info-input').value = document.getElementById('info-text')
        .innerText; // Rellenar el textarea con la información actual
}

function closeInfoModal() {
    document.getElementById('info-edit-modal').classList.add('hidden');
}

function saveInfo(event) {
    event.preventDefault();
    const newInfo = document.getElementById('info-input').value;
    document.getElementById('info-text').innerText = newInfo;
    closeInfoModal();
}