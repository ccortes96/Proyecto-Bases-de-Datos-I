<?php

	class Empresa{

		private $idEmpresa;
		private $nombre;
		private $TipoEmpresa_idTipoEmpresa;

		public function __construct($idEmpresa=null,
					$nombre=null,
					$TipoEmpresa_idTipoEmpresa=null){
			$this->idEmpresa = $idEmpresa;
			$this->nombre = $nombre;
			$this->TipoEmpresa_idTipoEmpresa = $TipoEmpresa_idTipoEmpresa;
		}
		public function getIdEmpresa(){
			return $this->idEmpresa;
		}
		public function setIdEmpresa($idEmpresa){
			$this->idEmpresa = $idEmpresa;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getTipoEmpresa_idTipoEmpresa(){
			return $this->TipoEmpresa_idTipoEmpresa;
		}
		public function setTipoEmpresa_idTipoEmpresa($TipoEmpresa_idTipoEmpresa){
			$this->TipoEmpresa_idTipoEmpresa = $TipoEmpresa_idTipoEmpresa;
		}
		public function __toString(){
			return "IdEmpresa: " . $this->idEmpresa .
				" Nombre: " . $this->nombre .
				" TipoEmpresa_idTipoEmpresa: " . $this->TipoEmpresa_idTipoEmpresa;
		}
	}
?>
