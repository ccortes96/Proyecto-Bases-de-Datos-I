<?php

	class Marca{

		private $idMarca;
		private $descripcion;
		private $Empresa_idEmpresa;

		public function __construct($idMarca=null,
					$descripcion=null,
					$Empresa_idEmpresa=null){
			$this->idMarca = $idMarca;
			$this->descripcion = $descripcion;
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function getIdMarca(){
			return $this->idMarca;
		}
		public function setIdMarca($idMarca){
			$this->idMarca = $idMarca;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getEmpresa_idEmpresa(){
			return $this->Empresa_idEmpresa;
		}
		public function setEmpresa_idEmpresa($Empresa_idEmpresa){
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function __toString(){
			return "IdMarca: " . $this->idMarca .
				" Descripcion: " . $this->descripcion .
				" Empresa_idEmpresa: " . $this->Empresa_idEmpresa;
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
