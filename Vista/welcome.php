<?php
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php  disabled
	$usuario=$_GET['tipo'];
?>
<html>
	<head>
		<title>Administrar Articulo</title>
	</head>	
	<body>

		<?php if($usuario == '1') {?>
			<header>Administrar Usuario
			</header>
			<table border=1>			
				<tr>
					<td><a href="ingresar_usuario.php">Ingresar</a></td>
				</tr>
				<tr>
					<td><a href="mostrar_usuario.php">Ver</a></td>
				</tr>
			</table>
		<?php }?>

		<header>Administrar Articulo
		</header>
		<table border=1>			
			<tr>
				<td><a href="ingresar.php">Ingresar</a></td>
			</tr>
			<tr>
				<td><a href="mostrar.php">Ver</a></td>
			</tr>
		</table>

		

		<a href="index.php">Salir</a>

		<footer>
			Administracion
		</footer>
	</body>
</html>