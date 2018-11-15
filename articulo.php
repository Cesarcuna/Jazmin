<?php
	class Articulo{
		private $id;
		private $nombre;
		private $precio;
		private $cantidad;
		private $marca;

		function __construct(){}

		public function getId(){
		return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getPrecio(){
		return $this->precio;
		}

		public function setPrecio($precio){
			$this->precio = $precio;
		}

		public function getCantidad(){
		return $this->cantidad;
		}

		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function getMarca(){
		return $this->marca;
		}

		public function setMarca($marca){
			$this->marca = $marca;
		}
	}
?>