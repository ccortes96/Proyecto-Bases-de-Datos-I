<?php

	class TipoCorreo{

		private $idTipoCorreo;
		private $descripcion;

		public function __construct($idTipoCorreo=null,
					$descripcion=null){
			$this->idTipoCorreo = $idTipoCorreo;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoCorreo(){
			return $this->idTipoCorreo;
		}
		public function setIdTipoCorreo($idTipoCorreo){
			$this->idTipoCorreo = $idTipoCorreo;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoCorreo: " . $this->idTipoCorreo .
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
