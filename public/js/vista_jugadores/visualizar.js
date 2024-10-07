document.addEventListener('DOMContentLoaded', function() {
    let editarInformacion = document.getElementById("eliminar");
    let edicionDesplegado = document.getElementById("agregados");

    editarInformacion.addEventListener('click', function() {
        edicionDesplegado.classList.toggle("activo");

    });
    const btnswitch =document.getElementById('avatar');

    btnswitch.addEventListener('click', ()=>{
        document.body.classList.toggle('ok');
        });

});
