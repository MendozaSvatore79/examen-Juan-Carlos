function togglePasswordVisibility(inputId) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text"; // Cambiar a texto
    } else {
        input.type = "password"; // Cambiar a contraseña
    }
}


        function submitForm() {
            const password = document.getElementById('txtcontrasenia').value;
            const confirmPassword = document.getElementById('txtconfirmcontrasenia').value;

            if (password === confirmPassword) {
                return true;
            } else {
                alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
                return false;
            }
        }

         // Verificar si el registro fue exitoso
         if (typeof registroExitoso !== 'undefined' && registroExitoso === true) {
            alert('Registro exitoso');
            window.location.href = 'index.php'; // Redirigir al índice
        }

        function validarContrasenia() {
        const password = document.getElementById('txtcontrasenia').value;
        const confirmPassword = document.getElementById('txtconfirmcontrasenia').value;

        // Expresión regular para verificar la complejidad de la contraseña
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/;

        if (!passwordPattern.test(password)) {
            alert('La contraseña debe contener al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números y caracteres especiales.');
            return false;
        }

        if (password !== confirmPassword) {
            alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
            return false;
        }

        return true;
    }
