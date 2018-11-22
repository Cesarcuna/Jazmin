<?php
//incluye la clase Articulo y Crud
require_once('../Controlador/crud.php');
require_once('../Modelo/articulo.php');
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

	<form action='../Controlador/administrar.php' method='post'>
	<table>
		<tr>
			<td>id:</td>
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
				<td><a href="actualizar_articulo.php?id=<?php echo $articulo->getId()?>&accion_articulo=a">Actualizar</a></td>
				<td><a href="../Controlador/administrar.php?id=<?php echo $articulo->getId()?>&accion_articulo=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="welcome.php?tipo=1">Volver</a>
</body>
</html>