=null<?php

	class Departamento{

		private $idDepartamento;
		private $descripcion;

		public function __construct($idDepartamento=null,
					$descripcion=null){
			$this->idDepartamento = $idDepartamento;
			$this->descripcion = $descripcion;
		}
		public function getIdDepartamento(){
			return $this->idDepartamento;
		}
		public function setIdDepartamento($idDepartamento){
			$this->idDepartamento = $idDepartamento;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdDepartamento: " . $this->idDepartamento .
				" Descripcion: " . $this->descripcion;
		}
	}
?>
