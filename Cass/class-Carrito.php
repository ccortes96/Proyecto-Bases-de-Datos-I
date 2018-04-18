<?php

	class Carrito{

		private $idCarrito;
		private $Cuenta_idCuenta;

		public function __construct($idCarrito=null,
					$Cuenta_idCuenta=null){
			$this->idCarrito = $idCarrito;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function getIdCarrito(){
			return $this->idCarrito;
		}
		public function setIdCarrito($idCarrito){
			$this->idCarrito = $idCarrito;
		}
		public function getCuenta_idCuenta(){
			return $this->Cuenta_idCuenta;
		}
		public function setCuenta_idCuenta($Cuenta_idCuenta){
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function __toString(){
			return "IdCarrito: " . $this->idCarrito .
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta;
		}
	}
?>
