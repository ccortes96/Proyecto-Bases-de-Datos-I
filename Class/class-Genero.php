<?php

	class Genero{

		private $idGenero;
		private $descripcion;

		public function __construct($idGenero=null,
					$descripcion=null){
			$this->idGenero = $idGenero;
			$this->descripcion = $descripcion;
		}
		public function getIdGenero(){
			return $this->idGenero;
		}
		public function setIdGenero($idGenero){
			$this->idGenero = $idGenero;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdGenero: " . $this->idGenero .
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
