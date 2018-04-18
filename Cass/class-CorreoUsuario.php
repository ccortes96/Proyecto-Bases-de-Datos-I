<?php

	class CorreoUsuario{

		private $idCorreoUsuario;
		private $descripcion;
		private $Usuario_idUsuario;

		public function __construct($idCorreoUsuario=null,
					$descripcion=null,
					$Usuario_idUsuario=null){
			$this->idCorreoUsuario = $idCorreoUsuario;
			$this->descripcion = $descripcion;
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function getIdCorreoUsuario(){
			return $this->idCorreoUsuario;
		}
		public function setIdCorreoUsuario($idCorreoUsuario){
			$this->idCorreoUsuario = $idCorreoUsuario;
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
			return "IdCorreoUsuario: " . $this->idCorreoUsuario .
				" Descripcion: " . $this->descripcion .
				" Usuario_idUsuario: " . $this->Usuario_idUsuario;
		}
	}
?>
