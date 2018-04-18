<?php

	class Oferta{

		private $idOferta;
		private $descripcion;
		private $estado;

		public function __construct($idOferta=null,
					$descripcion=null,
					$estado=null){
			$this->idOferta = $idOferta;
			$this->descripcion = $descripcion;
			$this->estado = $estado;
		}
		public function getIdOferta(){
			return $this->idOferta;
		}
		public function setIdOferta($idOferta){
			$this->idOferta = $idOferta;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdOferta: " . $this->idOferta .
				" Descripcion: " . $this->descripcion .
				" Estado: " . $this->estado;
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
