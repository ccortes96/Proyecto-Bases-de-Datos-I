<?php

	class TipoCalificacion{

		private $idTipoCalificacion;
		private $descripcion;

		public function __construct($idTipoCalificacion=null,
					$descripcion=null){
			$this->idTipoCalificacion = $idTipoCalificacion;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoCalificacion(){
			return $this->idTipoCalificacion;
		}
		public function setIdTipoCalificacion($idTipoCalificacion){
			$this->idTipoCalificacion = $idTipoCalificacion;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoCalificacion: " . $this->idTipoCalificacion .
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
