<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudArticulo{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo articulo
		public function insertar($articulo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO articulos values(NULL,:nombre,:precio,:cantidad,:marca)');
			$insert->bindValue('nombre',$articulo->getNombre());
			$insert->bindValue('precio',$articulo->getPrecio());
			$insert->bindValue('cantidad',$articulo->getCantidad());
			$insert->bindValue('marca',$articulo->getMarca());
			$insert->execute();

		}

		// método para mostrar todos los articulos
		public function mostrar(){
			$db=Db::conectar();
			$listaArticulos=[];
			$select=$db->query('SELECT * FROM articulos');

			foreach($select->fetchAll() as $articulo){
				$myArticulo= new Articulo();
				$myArticulo->setId($articulo['id_articulo']);
				$myArticulo->setNombre($articulo['nombre']);
				$myArticulo->setPrecio($articulo['precio']);
				$myArticulo->setCantidad($articulo['cantidad']);
				$myArticulo->setMarca($articulo['marca']);
				$listaArticulos[]=$myArticulo;
			}
			return $listaArticulos;
		}

		// método para eliminar un articulo, recibe como parámetro el id del articulo
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM articulos WHERE id_articulo=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un articulo, recibe como parámetro el id del articulo
		public function obtenerArticulo($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM articulos WHERE id_articulo=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$articulo=$select->fetch();
			$myArticulo= new Articulo();
			$myArticulo->setId($articulo['id_articulo']);
			$myArticulo->setNombre($articulo['nombre']);
			$myArticulo->setPrecio($articulo['precio']);
			$myArticulo->setCantidad($articulo['cantidad']);
			$myArticulo->setMarca($articulo['marca']);
			return $myArticulo;
		}

		// método para actualizar un articulo, recibe como parámetro el articulo
		public function actualizar($articulo){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE articulos SET nombre=:nombre,precio=:precio,cantidad=:cantidad,marca=:marca  WHERE id_articulo=:id');
			$actualizar->bindValue('id',$articulo->getId());
			$actualizar->bindValue('nombre',$articulo->getNombre());
			$actualizar->bindValue('precio',$articulo->getPrecio());
			$actualizar->bindValue('cantidad',$articulo->getCantidad());
			$actualizar->bindValue('marca',$articulo->getMarca());
			$actualizar->execute();
		}
	}
?>