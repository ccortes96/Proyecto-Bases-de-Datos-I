<?php

	class TipoEmpresa{

		private $idTipoEmpresa;
		private $descripcion;

		public function __construct($idTipoEmpresa=null,
					$descripcion=null){
			$this->idTipoEmpresa = $idTipoEmpresa;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoEmpresa(){
			return $this->idTipoEmpresa;
		}
		public function setIdTipoEmpresa($idTipoEmpresa){
			$this->idTipoEmpresa = $idTipoEmpresa;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoEmpresa: " . $this->idTipoEmpresa .
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
