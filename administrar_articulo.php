<?php
//incluye la clase Articulo y CrudArticulo
require_once('crud_articulo.php');
require_once('articulo.php');

$crud= new CrudArticulo();
$articulo= new Articulo();

	// si el elemento insertar no viene nulo llama al crud e inserta un articulo
	if (isset($_POST['insertar'])) {
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		$articulo->setCantidad($_POST['cantidad']);
		$articulo->setMarca($_POST['marca']);
		//llama a la función insertar definida en el crud
		$crud->insertar($articulo);
		header('Location: welcome.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el articulo
	}elseif(isset($_POST['actualizar'])){
		$articulo->setId($_POST['id']);
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		$articulo->setCantidad($_POST['cantidad']);
		$articulo->setMarca($_POST['marca']);
		$crud->actualizar($articulo);
		header('Location: welcome.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un articulo
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: welcome.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	//si el elemento de la vista con nombre buscar no viene nulo, llama al crud y busca el articulo
	}elseif(isset($_POST['buscar'])){
		$articulo->setId($_POST['id']);
		$crud->obtenerArticulo($_POST['id']);
		header('Location:actualizar.php?id='.$articulo->getId());
	}
?>