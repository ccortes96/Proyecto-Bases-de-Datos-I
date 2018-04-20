<?php

	class FormaEnvio{

		private $idFormaEnvio;
		private $descripcion;

		public function __construct($idFormaEnvio=null,
					$descripcion=null){
			$this->idFormaEnvio = $idFormaEnvio;
			$this->descripcion = $descripcion;
		}
		public function getIdFormaEnvio(){
			return $this->idFormaEnvio;
		}
		public function setIdFormaEnvio($idFormaEnvio){
			$this->idFormaEnvio = $idFormaEnvio;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdFormaEnvio: " . $this->idFormaEnvio .
				" Descripcion: " . $this->descripcion;
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
