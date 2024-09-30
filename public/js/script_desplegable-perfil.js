document.addEventListener('DOMContentLoaded', function() {
    let menu_header = document.getElementById("menu_header");
    let menu_desplegado_header = document.getElementById("menu_desplegado_header");

    menu_header.addEventListener('click', function() {
        menu_desplegado_header.classList.toggle("open-menu");
    });
});