<?php

	class TipoProducto{

		private $idTipoProducto;
		private $descripcion;

		public function __construct($idTipoProducto=null,
					$descripcion=null){
			$this->idTipoProducto = $idTipoProducto;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoProducto(){
			return $this->idTipoProducto;
		}
		public function setIdTipoProducto($idTipoProducto){
			$this->idTipoProducto = $idTipoProducto;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoProducto: " . $this->idTipoProducto .
				" Descripcion: " . $this->descripcion;
		}
	}
?>
