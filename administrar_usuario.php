<?php
//incluye la clase Articulo y CrudArticulo
require_once('crud_usuario.php');
require_once('usuario.php');

$crud= new CrudUsuario();
$usuario= new Usuario();


	if(isset($_POST['ingresar'])) 
	{
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$articulo=new Usuario();
		$articulo=$crud->buscarUsuario($usuario);

		if($articulo->getId() == null){
			header('Location: index.php');
		}else{
			header('Location: welcome.php');

		}
	}

	// si el elemento insertar no viene nulo llama al crud e inserta un usuario
	if (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location: welcome.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setContrasena($_POST['contrasena']);
		$usuario->setTipo($_POST['tipo']);
		$crud->actualizar($usuario);
		header('Location: welcome.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: welcome.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar_usuario.php');
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el usuario
	}elseif(isset($_POST['buscar'])){
		$usuario->setId($_POST['id']);

		$articulo=new Usuario();
		$articulo=$crud->obtenerUsuario($usuario->getId());

		if($articulo->getId() == null){
			header('Location: mostrar_usuario.php');
		}else{
			header('Location:actualizar_usuario.php?id='.$usuario->getId());
		}
		
	}
?>