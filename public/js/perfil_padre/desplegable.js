document.addEventListener('DOMContentLoaded', function() {
    let editarInformacion = document.getElementById("editar");
    let edicionDesplegado = document.getElementById("informacion");

    editarInformacion.addEventListener('click', function() {
        edicionDesplegado.classList.toggle("activo");

        if(editarInformacion.innerText === "Editar"){
            editarInformacion.innerText = "Aceptar";
        }
        else{
            editarInformacion.innerText = "Editar";
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let editarInformacion = document.getElementById("cambiar");
    let edicionDesplegado = document.getElementById("clave");

    editarInformacion.addEventListener('click', function() {
        edicionDesplegado.classList.toggle("activo");

        if(editarInformacion.innerText === "Editar"){
            editarInformacion.innerText = "Aceptar";
        }
        else{
            editarInformacion.innerText = "Editar";
        }
    });
});