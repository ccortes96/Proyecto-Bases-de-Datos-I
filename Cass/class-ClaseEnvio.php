=null<?php

	class ClaseEnvio{

		private $idClaseEnvio;
		private $descripcion;
		private $categoria;

		public function __construct($idClaseEnvio=null,
					$descripcion=null,
					$categoria=null){
			$this->idClaseEnvio = $idClaseEnvio;
			$this->descripcion = $descripcion;
			$this->categoria = $categoria;
		}
		public function getIdClaseEnvio(){
			return $this->idClaseEnvio;
		}
		public function setIdClaseEnvio($idClaseEnvio){
			$this->idClaseEnvio = $idClaseEnvio;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function __toString(){
			return "IdClaseEnvio: " . $this->idClaseEnvio .
				" Descripcion: " . $this->descripcion .
				" Categoria: " . $this->categoria;
		}

		#Funciones
		public static function listarTodos($conexion){

		}

		public function seleccionar($conexion){

		}

		public function insertarRegistro($conexion){

		}

		public  function actualizarRegistro($conexion){

		}

		public static function eliminarRegistro($conexion, $id){

		}

	}
?>
