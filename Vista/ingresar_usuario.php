<html>
<head>
	<title> Ingresar Usuario </title>
</head>
<header>
Ingresa los datos del Usuario
</header>
<form action='administrar_usuario.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' required></td>
		</tr>
		<tr>
			<td>Usuario:</td>
			<td> <input type='text' name='usuario' required></td>
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td> <input type='text' name='contrasena' required></td>
		</tr>
		<tr>
			<td>Tipo:</td>
			<td><input type='text' name='tipo' required></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="welcome.php?tipo=1">Volver</a>
</form>

</html>