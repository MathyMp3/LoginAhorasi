<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Usuario</title>
</head>
<body>
<form action="guardar_usuario.php" method="post">
<label>
<p>Nombre de Usuario</p>
<input type="text" name="usuario"
placeholder="Nombre de usuario"
required>
</label>
<br>
<label>
<p>Contrase~na</p>
<input type="password" name="password"
placeholder="Contrasena" required>
</label>
<br>
<input type="submit" value="Registrarse">
</form>
</body>
</html>