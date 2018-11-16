<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
	</head>	
	<body>
	<nav class="uk-navbar-container uk-margin" uk-navbar>
	    <div class="uk-navbar-left">

	        <a class="uk-navbar-item uk-logo" href="#">Mas Ferrterias</a>
	     
	    </div>
	</nav>
	<article>
		<div class="uk-cover-container uk-height-small">
		    <img src="images/dark.jpg" alt="" uk-cover>
		</div>
	</article>
	<article class="uk-article">
		<div class="uk-flex uk-flex-center">
			<div class="uk-card uk-card-default uk-card-body">
				<h2 class="uk-card-title">Login</h2>
				<form action="Controlador/administrar.php" method="POST" > 
					<div class="uk-margin">
						<div class="uk-inline">
							<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
							<input class="uk-input" id="usuario" name="usuario" type="text" placeholder="usuario">
						</div>
					</div>
					<div class="uk-margin">
						<div class="uk-inline">
							<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
							<input class="uk-input" id="contrasena" name="contrasena" type="password" placeholder="password">
						</div>
					</div>
					<div class="uk-flex uk-flex-center">
						<input class="uk-button uk-button-primary" name="ingresar_usuario" type="submit" value="ingresar">
					</div> 
				</form>
			</div>
		</div>
	</article>		
	</body>
	<footer>
		<div class="uk-flex uk-flex-center">
			Este login no es chida por que esta hecha en PHP :(
		</div>
	</footer>
</html>