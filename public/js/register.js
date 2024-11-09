async function register(event) {
    event.preventDefault();

    // Captura los valores del formulario
    const name = document.querySelector('[name="name"]').value;
    const last_name = document.querySelector('[name="last_name"]').value;
    const age = document.querySelector('[name="age"]').value;
    const email = document.querySelector('[name="email"]').value;
    const user = document.querySelector('[name="user"]').value;
    const password = document.querySelector('[name="password"]').value;
    const password_confirmation = document.querySelector('[name="password_confirmation"]').value;
    const pin = document.querySelector('[name="pin"]').value;

    // Enviar solicitud al backend
    try {
        const response = await fetch('https://backend-production-40d8.up.railway.app/v1/auth/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name,
                last_name,
                age,
                email,
                user,
                password,
                password_confirmation,
                pin,
            }),
        });

        const data = await response.json();

        if (response.ok) {
            alert('Registro exitoso');
            // Redirige o realiza otra acción después del registro exitoso
            window.location.href = '/resources/views/terms.blade.php';
        } else {
            alert('Error en el registro: ' + JSON.stringify(data));
        }
    } catch (error) {
        console.error('Error en el registro:', error);
        alert('Ocurrió un error al registrar el usuario.');
    }
}