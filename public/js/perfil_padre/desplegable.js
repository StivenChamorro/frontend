// Cargar datos del localStorage al cargar la página
window.onload = function() {
    const nombres = localStorage.getItem('nombres') || 'John Andres';
    const apellidos = localStorage.getItem('apellidos') || 'Smith Pines';
    const fechaNacimiento = localStorage.getItem('fechaNacimiento') || '12/08/1986';
    const correo = localStorage.getItem('correo') || 'johnsmith@example.com';

    document.getElementById('nombres').innerText = nombres;
    document.getElementById('apellidos').innerText = apellidos;
    document.getElementById('fechaNacimiento').innerText = fechaNacimiento;
    document.getElementById('correo').innerText = correo;
};

document.getElementById('editar').addEventListener('click', function() {
    const elementosEditable = document.querySelectorAll('.editable');
    elementosEditable.forEach(elemento => {
        const contenidoActual = elemento.innerText;
        elemento.innerHTML = `<input type="text" value="${contenidoActual}" class="inputEditar" />`;
    });

    this.innerText = 'Guardar';
    this.removeEventListener('click', arguments.callee); // Remover el event listener anterior

    // Agregar un nuevo listener para guardar cambios
    this.addEventListener('click', function() {
        const inputs = document.querySelectorAll('.inputEditar');
        inputs.forEach(input => {
            const parent = input.parentElement;
            const nuevaInfo = input.value; // Obtenemos el nuevo valor
            parent.innerText = nuevaInfo; // Guardamos el nuevo valor

            // Guardamos en localStorage
            switch (parent.id) {
                case 'nombres':
                    localStorage.setItem('nombres', nuevaInfo);
                    break;
                case 'apellidos':
                    localStorage.setItem('apellidos', nuevaInfo);
                    break;
                case 'fechaNacimiento':
                    localStorage.setItem('fechaNacimiento', nuevaInfo);
                    break;
                case 'correo':
                    localStorage.setItem('correo', nuevaInfo);
                    break;
            }
        });

        // Cambiar el texto del botón
        this.innerText = 'Editar';
        this.removeEventListener('click', arguments.callee); // Remover el event listener anterior
        this.addEventListener('click', function() {
            // Lógica para editar de nuevo si se desea
        });
    });
});