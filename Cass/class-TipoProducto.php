<?php

	class TipoProducto{

		private $idTipoProducto;
		private $descripcion;

		public function __construct($idTipoProducto=null,
					$descripcion=null){
			$this->idTipoProducto = $idTipoProducto;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoProducto(){
			return $this->idTipoProducto;
		}
		public function setIdTipoProducto($idTipoProducto){
			$this->idTipoProducto = $idTipoProducto;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoProducto: " . $this->idTipoProducto .
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
