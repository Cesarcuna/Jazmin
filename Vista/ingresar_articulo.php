<html>
<head>
	<title> Ingresar Articulo</title>
</head>
<header>
Ingresa los datos del Articulo
</header>
<form action='administrar.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' required></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td> <input type='text' name='precio' required></td>
		</tr>
		<tr>
			<td>Cantidad:</td>
			<td> <input type='text' name='cantidad' required></td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td><input type='text' name='marca' required></td>
		</tr>
		<input type='hidden' name='insertar_articulo' value='insertar_articulo'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="welcome.php">Volver</a>
</form>

</html>