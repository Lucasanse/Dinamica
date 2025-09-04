// Función para verificar que haya al menos una letra y un número
function tieneNumeroYLetra(cadena) {
    let tieneLetra = false;
    let tieneNumero = false;
    let i = 0;

    while (i < cadena.length && (!tieneLetra || !tieneNumero)) {
        let char = cadena[i];

        if ((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z')) {
            tieneLetra = true;
        }

        if (char >= '0' && char <= '9') {
            tieneNumero = true;
        }

        i++;
    }

    return tieneLetra && tieneNumero;
}

// Validación del formulario
document.getElementById('loginForm').addEventListener('submit', function (event) {
    let form = event.target;
    let usuario = document.getElementById('usuario');
    let clave = document.getElementById('clave');

    let usuarioVal = usuario.value.trim();
    let claveVal = clave.value;

    if (!usuarioVal) {
        event.preventDefault();
        event.stopPropagation();
        usuario.classList.add('is-invalid');
    } else {
        usuario.classList.remove('is-invalid');
    }

    if (claveVal.length < 8 || claveVal === usuarioVal || !tieneNumeroYLetra(claveVal)) {
        event.preventDefault();
        event.stopPropagation();
        clave.classList.add('is-invalid');
    } else {
        clave.classList.remove('is-invalid');
    }

    form.classList.add('was-validated');
});
