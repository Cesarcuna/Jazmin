<?php
//incluye la clase Articulo y CrudArticulo
	require_once('../Controlador/crud.php');
	require_once('../Modelo/usuario.php');
	$crud= new CrudUsuario();
	$usuario=new Usuario();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php  disabled
	$usuario=$crud->obtenerUsuario($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='../Controlador/administrar.php' method='post'>
	<table>
			<td><input type='hidden' name='id' value='<?php echo $usuario->getId()?>' ></td> 
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $usuario->getNombre()?>' required></td>
		</tr>
		<tr>
			<td>Usuario:</td>
			<td><input type='text' name='usuario' value='<?php echo $usuario->getUsuario()?>' required></td>
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td><input type='text' name='contrasena' value='<?php echo $usuario->getContrasena() ?>' required></td>
		</tr>
		<tr>
			<td>Tipo:</td>
			<td><input type='text' name='tipo' value='<?php echo $usuario->getTipo() ?>' required></td>
		</tr>
		<input type='hidden' name='actualizar_usuario' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="welcome.php?tipo=1">Volver</a>
</form>
</body>
</html>