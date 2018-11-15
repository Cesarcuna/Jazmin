<?php
//incluye la clase Articulo y Crud
require_once('crud.php');
require_once('articulo.php');
$crud=new CrudArticulo();
$articulo= new Articulo();
//obtiene todos los libros con el método mostrar de la clase crud
$listaArticulos=$crud->mostrar();
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
		<input type='hidden' name='buscar_articulo' value='buscar_articulo'>
	</table>
	<input type='submit' value='Buscar'>
	</form>


	<table border=1>
		<head>
			<td>Id</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Marca</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaArticulos as $articulo) {?>
			<tr>
				<td><?php echo $articulo->getId() ?></td>
				<td><?php echo $articulo->getNombre() ?></td>
				<td><?php echo $articulo->getPrecio() ?></td>
				<td><?php echo $articulo->getCantidad()?> </td>
				<td><?php echo $articulo->getMarca()?> </td>
				<td><a href="actualizar.php?id=<?php echo $articulo->getId()?>&accion=a">Actualizar</a></td>
				<td><a href="administrar.php?id=<?php echo $articulo->getId()?>&accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="welcome.php">Volver</a>
</body>
</html>