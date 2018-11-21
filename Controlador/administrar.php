<?php
require_once('../Controlador/crud.php');
require_once('../Modelo/articulo.php');
require_once('../Modelo/usuario.php');
$crudA= new CrudArticulo();
$articulo= new Articulo();
$crudU= new CrudUsuario();
$usuario= new Usuario();

	// si el elemento insertar no viene nulo llama al crud e inserta un articulo
	if (isset($_POST['insertar_articulo'])) {
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		$articulo->setCantidad($_POST['cantidad']);
		$articulo->setMarca($_POST['marca']);
		//llama a la función insertar definida en el crud
		$crudA->insertar($articulo);
		header('Location: ../welcome.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el articulo
	}elseif(isset($_POST['actualizar_articulo'])){
		$articulo->setId($_POST['id']);
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		$articulo->setCantidad($_POST['cantidad']);
		$articulo->setMarca($_POST['marca']);
		$crudA->actualizar($articulo);
		header('Location: ../welcome.php');
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el articulo
	}elseif(isset($_POST['buscar_articulo'])){
		$articulo->setId($_POST['id']);
		$crudA->obtenerArticulo($_POST['id']);
		header('Location:../Vista/actualizar_articulo.php?id='.$articulo->getId());
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el articulo	
	}elseif(isset($_POST['ingresar_usuario'])) {
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usario_aux=new Usuario();
		$usario_aux=$crudU->buscarUsuario($usuario);

		if($usario_aux->getId() == null){
			header('Location: ../index.php');
		}else{
			header('Location: ../Vista/welcome.php?tipo='.$usario_aux->getTipo());
		}
	// si el elemento insertar no viene nulo llama al crud e inserta un usuario	
	}elseif (isset($_POST['insertar_usuario'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		//llama a la función insertar definida en el crud
		$crudU->insertar($usuario);
		header('Location: ../Vista/welcome.php?tipo=1');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar_usuario'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		$crudU->actualizar($usuario);
		header('Location: ../Vista/welcome.php?tipo=1');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['buscar_usuario'])){
		$usuario->setId($_POST['id']);
		$articulo=new Usuario();
		$articulo=$crudU->obtenerUsuario($usuario->getId());
		if($articulo->getId() == null){
			header('Location: mostrar_usuario.php');
		}else{
			header('Location:../Vista/actualizar_usuario.php?id='.$articulo->getId());
		}
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un articulo
	}elseif ($_GET['accion_usuario']=='e') {
		$crudU->eliminar($_GET['id']);
		header('Location: ../Vista/mostrar_usuario.php');	
		//header('Location: ../Vista/welcome.php?tipo=1');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion_usuario']=='a'){
		header('Location:../Vista/actualizar_usuario.php');
	}elseif ($_GET['accion_articulo']=='e') {
		$crudA->eliminar($_GET['id']);
		header('Location: ../welcome.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion_articulo']=='a'){
		header('Location:../Vista/actualizar_articulo.php');
	}
?>