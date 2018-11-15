<html>
	<head>
		<title>Login</title>
	</head>	
	<body>
		
		<form action="Controlador/administrar.php" method="POST" > 
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" ></div>
			<br />
			<div><label>Password:</label><input id="contrasena" name="contrasena" type="password"></div>
			<br />
			<div><input name="ingresar_usuario" type="submit" value="ingresar"></div> 
		</form>
		<footer>
			Login
		</footer>
	</body>
</html>