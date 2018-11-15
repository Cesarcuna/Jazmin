<?php
	class Usuario{
		private $id;
		private $nombre;
		private $usuario;
		private $contrasena;
		private $tipo;

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

		public function getUsuario(){
		return $this->usuario;
		}


		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getContrasena(){
		return $this->contrasena;
		}

		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}

		public function getTipo(){
		return $this->tipo;
		}

		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
	}
?>