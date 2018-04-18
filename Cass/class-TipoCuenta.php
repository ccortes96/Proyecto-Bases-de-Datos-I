<?php

	class TipoCuenta{

		private $idTipoCuenta;
		private $descripcion;

		public function __construct($idTipoCuenta=null,
					$descripcion=null){
			$this->idTipoCuenta = $idTipoCuenta;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoCuenta(){
			return $this->idTipoCuenta;
		}
		public function setIdTipoCuenta($idTipoCuenta){
			$this->idTipoCuenta = $idTipoCuenta;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function toString(){
			return "IdTipoCuenta: " . $this->idTipoCuenta .
				" Descripcion: " . $this->descripcion;
		}
	}
?>
