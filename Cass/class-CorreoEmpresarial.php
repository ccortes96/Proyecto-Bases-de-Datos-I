<?php

	class CorreoEmpresarial{

		private $idCorreoEmpresarial;
		private $descripcion;
		private $TipoCorreo_idTipoCorreo;
		private $Empresa_idEmpresa;

		public function __construct($idCorreoEmpresarial=null,
					$descripcion=null,
					$TipoCorreo_idTipoCorreo=null,
					$Empresa_idEmpresa=null){
			$this->idCorreoEmpresarial = $idCorreoEmpresarial;
			$this->descripcion = $descripcion;
			$this->TipoCorreo_idTipoCorreo = $TipoCorreo_idTipoCorreo;
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function getIdCorreoEmpresarial(){
			return $this->idCorreoEmpresarial;
		}
		public function setIdCorreoEmpresarial($idCorreoEmpresarial){
			$this->idCorreoEmpresarial = $idCorreoEmpresarial;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getTipoCorreo_idTipoCorreo(){
			return $this->TipoCorreo_idTipoCorreo;
		}
		public function setTipoCorreo_idTipoCorreo($TipoCorreo_idTipoCorreo){
			$this->TipoCorreo_idTipoCorreo = $TipoCorreo_idTipoCorreo;
		}
		public function getEmpresa_idEmpresa(){
			return $this->Empresa_idEmpresa;
		}
		public function setEmpresa_idEmpresa($Empresa_idEmpresa){
			$this->Empresa_idEmpresa = $Empresa_idEmpresa;
		}
		public function __toString(){
			return "IdCorreoEmpresarial: " . $this->idCorreoEmpresarial .
				" Descripcion: " . $this->descripcion .
				" TipoCorreo_idTipoCorreo: " . $this->TipoCorreo_idTipoCorreo .
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
