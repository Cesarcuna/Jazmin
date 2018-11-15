<?php
//incluye la clase Articulo y Crud
require_once('../Controlador/crud.php');
require_once('../Modelo/usuario.php');
$crud=new CrudUsuario();
$usuario= new Usuario();
//obtiene todos los libros con el método mostrar de la clase crud
$listaUsuarios=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Articulos</title>
</head>
<body>

	<form action='administrar.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='id' ></td>
		</tr>
		<input type='hidden' name='buscar' value='buscar'>
	</table>
	<input type='submit' value='Buscar'>
	</form>


	<table border=1>
		<head>
			<td>Id</td>
			<td>Nombre</td>
			<td>Usuario</td>
			<td>Contraseña</td>
			<td>Tipo</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUsuarios as $usuario) {?>
			<tr>
				<td><?php echo $usuario->getId() ?></td>
				<td><?php echo $usuario->getNombre() ?></td>
				<td><?php echo $usuario->getUsuario() ?></td>
				<td><?php echo $usuario->getContrasena()?> </td>
				<td><?php echo $usuario->getTipo()?> </td>
				<td><a href="actualizar_usuario.php?id=<?php echo $usuario->getId()?>&accion=a">Actualizar</a></td>
				<td><a href="administrar_usuario.php?id=<?php echo $usuario->getId()?>&accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="welcome.php?tipo=1">Volver</a>
</body>
</html>