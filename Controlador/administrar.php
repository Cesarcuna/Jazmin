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
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un articulo
	}elseif ($_GET['accion_articulo']=='e') {
		$crudA->eliminar($_GET['id']);
		header('Location: ../welcome.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion_articulo']=='a'){
		header('Location:../Vista/actualizar_articulo.php');
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el articulo
	}elseif(isset($_POST['buscar_articulo'])){
		$articulo->setId($_POST['id']);
		$crudA->obtenerArticulo($_POST['id']);
		header('Location:../Vista/actualizar_articulo.php?id='.$articulo->getId());
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el articulo	
	}elseif(isset($_POST['ingresar_usuario'])) {
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$articulo=new Usuario();
		$articulo=$crudU->buscarUsuario($usuario);
		if($articulo->getId() == null){
			header('Location: ../index.php');
		}else{
			header('Location: ../welcome.php');
		}
	// si el elemento insertar no viene nulo llama al crud e inserta un usuario	
	}elseif (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		//llama a la función insertar definida en el crud
		$crudU->insertar($usuario);
		header('Location: ../welcome.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		$crudU->actualizar($usuario);
		header('Location: ../welcome.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
	}elseif ($_GET['accion']=='e') {
		$crudU->eliminar($_GET['id']);
		header('Location: ../welcome.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar_usuario.php');
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el usuario
	}elseif(isset($_POST['buscar'])){
		$usuario->setId($_POST['id']);
		$articulo=new Usuario();
		$articulo=$crudU->obtenerUsuario($usuario->getId());
		if($articulo->getId() == null){
			header('Location:../Vista/mostrar_usuario.php');
		}else{
			header('Location:../Vista/actualizar_usuario.php?id='.$usuario->getId());
		}
	}
?>