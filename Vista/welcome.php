<?php
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php  disabled
	$usuario=$_GET['tipo'];
?>
<html>
	<head>
		<title>Administrar Articulo</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/uikit.min.css" />
        <script src="../js/uikit.min.js"></script>
        <script src="../js/uikit-icons.min.js"></script>
	</head>	
	<body>
	<nav class="uk-navbar-container uk-margin" uk-navbar>
	    <div class="uk-navbar-left">
	        <a class="uk-navbar-item uk-logo" href="#">Bienvenido</a>		     
	    </div>
	    <div class="uk-navbar-right">
	        <a class="uk-navbar-item uk-logo" href="../index.php">Logout</a>		     
	    </div>
	</nav>

<div class="uk-child-width-expand@s uk-text-center" uk-grid>
	<?php if($usuario == '1') {?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        	<h2 class="uk-card-title">Administrar Usuario</h2>
        	<table class="uk-table uk-table-divider">	
        		<thead>
			        <tr>
			            <th>Enlaces</th>
			        </tr>
			    </thead>	
			    <tbody>		
					<tr>
						<td><h5><a class="uk-link-heading" href="ingresar_usuario.php">Ingresar</a></h5></td>
					</tr>
					<tr>
						<td><h5><a class="uk-link-heading" href="mostrar_usuario.php">Ver</a></h5></td>
					</tr>
				</tbody>
			</table>	
        </div>
    </div>
    <?php }?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        	<h2 class="uk-card-title">Administrar Articulo</h2>
			<table class="uk-table uk-table-divider">	
				<thead>
			        <tr>
			            <th>Enlaces</th>
			        </tr>
			    </thead>	
			    <tbody>	
					<tr>
						<td><h5><a class="uk-link-heading" href="ingresar_articulo.php">Ingresar</a></h5></td>
					</tr>
					<tr>
						<td><h5><a class="uk-link-heading" href="mostrar_articulo.php">Ver</a></h5></td>
					</tr>
				</tbody>
			</table>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
        	<a href="../index.php">Salir</a>
        </div>
    </div>
</div>

		<footer>
			<nav class="uk-navbar-container uk-margin" uk-navbar>
			    <div class="uk-navbar-center">
			        <a class="uk-navbar-item uk-logo" href="#">Administracion</a>

			    </div>
			</nav>
		</footer>
	</body>
</html>