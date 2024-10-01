document.addEventListener('DOMContentLoaded', function() {
    const buttonProfile = document.querySelector('.button-profile');
    const modal = document.querySelector('.modal');

    function toggleDropdown() {
        if (modal.style.display === 'block') {
            closeDropdown();
        } else {
            openDropdown();
        }
    }

    function openDropdown() {
        modal.style.display = 'block';
        setTimeout(() => {
            modal.style.opacity = '1';
            modal.style.transform = 'translateY(0)';
        }, 10);
    }

    function closeDropdown() {
        modal.style.opacity = '0';
        modal.style.transform = 'translateY(-20px)';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    function handleClickOutside(event) {
        if (!modal.contains(event.target) && event.target !== buttonProfile) {
            closeDropdown();
        }
    }

    buttonProfile.addEventListener('click', function(event) {
        event.stopPropagation();
        toggleDropdown();
    });

    document.addEventListener('click', handleClickOutside);

    // Opcional: Cerrar el dropdown al presionar la tecla Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeDropdown();
        }
    });
});