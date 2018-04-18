<?php

	class Idioma{

		private $idIdioma;
		private $descripcion;

		public function __construct($idIdioma=null,
					$descripcion=null){
			$this->idIdioma = $idIdioma;
			$this->descripcion = $descripcion;
		}
		public function getIdIdioma(){
			return $this->idIdioma;
		}
		public function setIdIdioma($idIdioma){
			$this->idIdioma = $idIdioma;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function toString(){
			return "IdIdioma: " . $this->idIdioma .
				" Descripcion: " . $this->descripcion;
		}
	}
?>
