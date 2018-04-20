<?php

	class TelefonoEmpresarial{

		private $idTelefonoEmpresarial;
		private $descripcion;
		private $Empresa_idEmpresa;

		public function __construct($idTelefonoEmpresarial=null,
					$descripcion=null,
					$Empresa_idEmpresa=null){
			$this->idTelefonoEmpresarial = $idTelefonoEmpresarial;
			$this->descripcion = $descripcion;
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function getIdTelefonoEmpresarial(){
			return $this->idTelefonoEmpresarial;
		}
		public function setIdTelefonoEmpresarial($idTelefonoEmpresarial){
			$this->idTelefonoEmpresarial = $idTelefonoEmpresarial;
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
			return "IdTelefonoEmpresarial: " . $this->idTelefonoEmpresarial .
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
