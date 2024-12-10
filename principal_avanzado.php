<?php
session_start();
if ($_SESSION['categoria'] !== 'avanzado') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Avanzado</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> (Administrador)</h1>
    <p>Tienes acceso total al sistema.</p>
    <a href="crear_usuario.php">Crear Usuario</a><br>
    <a href="buscar_usuario.php">Buscar Usuarios</a><br>
    <a href="eliminar_usuario.php">Eliminar Usuarios</a><br>
    <a href="cambiar_password_admin.php">Cambiar Contraseña de Otros Usuarios</a><br>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>
