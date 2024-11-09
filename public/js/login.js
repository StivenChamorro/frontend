document.getElementById('loginButton').addEventListener('click', login);

function login() {
    // Obtener los valores de los campos del formulario
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validar que los campos no estén vacíos
    if (!email || !password) {
        alert("Por favor, ingrese ambos campos.");
        return;
    }

    // Enviar los datos al backend
    fetch('https://backend-production-40d8.up.railway.app/v1/auth/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.token)
        if (data.token) {
            
            // Si el login es exitoso, guarda el token y redirige
            localStorage.setItem('token', data.token);
            window.location.href = '/resources/views/home.blade.php'; // Redirige a la página principal
        } else {
            alert('Credenciales no válidas');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al intentar iniciar sesión.');
    });
}