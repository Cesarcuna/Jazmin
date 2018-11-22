<?php
//incluye la clase Articulo y CrudArticulo
	require_once('../Controlador/crud.php');
	require_once('../Modelo/articulo.php');
	$crud= new CrudArticulo();
	$articulo=new Articulo();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php  disabled
	$articulo=$crud->obtenerArticulo($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Articulo</title>
</head>
<body>
	<form action='../Controlador/administrar.php' method='post'>
	<table>
			<td><input type='hidden' name='id' value='<?php echo $articulo->getId()?>' ></td> 
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $articulo->getNombre()?>' required></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' value='<?php echo $articulo->getPrecio()?>' required></td>
		</tr>
		<tr>
			<td>Cantidad:</td>
			<td><input type='text' name='cantidad' value='<?php echo $articulo->getCantidad() ?>' required></td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td><input type='text' name='marca' value='<?php echo $articulo->getMarca() ?>' required></td>
		</tr>
		<input type='hidden' name='actualizar_articulo' value'actualizar_articulo'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="welcome.php?tipo=1">Volver</a>
</form>
</body>
</html>