<?php

	class Celular{

		private $idCelular;
		private $descripcion;
		private $Usuario_idUsuario;

		public function __construct($idCelular=null,
					$descripcion=null,
					$Usuario_idUsuario=null){
			$this->idCelular = $idCelular;
			$this->descripcion = $descripcion;
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function getIdCelular(){
			return $this->idCelular;
		}
		public function setIdCelular($idCelular){
			$this->idCelular = $idCelular;
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
			return "IdCelular: " . $this->idCelular .
				" Descripcion: " . $this->descripcion .
				" Usuario_idUsuario: " . $this->Usuario_idUsuario;
		}
	}
?>
