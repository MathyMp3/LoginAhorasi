<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Sistema de Login</h1>
    <form id="loginForm">
        <label>Usuario:</label>
        <input type="text" id="usuario" required><br>
        <label>Contraseña:</label>
        <input type="password" id="password" required><br>
        <button type="button" onclick="confirmar()">Iniciar Sesión</button>
    </form>
    <div id="result"></div>

    <script>
        function confirmar() {
            var user = $('#usuario').val();
            var pass = $('#password').val();
            $.ajax({
                url: 'validar.php',
                type: 'POST',
                data: { usuario: user, password: pass },
                success: function(resp) {
                    switch (parseInt(resp)) {
                        case 1:
                            location.href = './principal_avanzado.php';
                            break;
                        case 2:
                            location.href = './principal_medio.php';
                            break;
                        case 3:
                            location.href = './principal_basico.php';
                            break;
                        default:
                            $("#result").html("<strong>¡Error!</strong> Usuario o contraseña incorrectos.");
                    }
                }
            });
        }
    </script>
</body>
</html>
