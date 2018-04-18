<?php

	class TelefonoUsuario{

		private $idTelefono;
		private $descripcion;
		private $Usuario_idUsuario;

		public function __construct($idTelefono=null,
					$descripcion=null,
					$Usuario_idUsuario=null){
			$this->idTelefono = $idTelefono;
			$this->descripcion = $descripcion;
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function getIdTelefono(){
			return $this->idTelefono;
		}
		public function setIdTelefono($idTelefono){
			$this->idTelefono = $idTelefono;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getUsuario_idUsuario(){
			return $this->Usuario_idUsuario;
		}
		public function setUsuario_idUsuario($Usuario_idUsuario){
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function __toString(){
			return "IdTelefono: " . $this->idTelefono .
				" Descripcion: " . $this->descripcion .
				" Usuario_idUsuario: " . $this->Usuario_idUsuario;
		}
	}
?>
