<?php

	class Pedido{

		private $idPedido;
		private $Factura_idFactura;
		private $Cuenta_idCuenta;
		private $estado;

		public function __construct($idPedido=null,
					$Factura_idFactura=null,
					$Cuenta_idCuenta=null,
					$estado=null){
			$this->idPedido = $idPedido;
			$this->Factura_idFactura = $Factura_idFactura;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
			$this->estado = $estado;
		}
		public function getIdPedido(){
			return $this->idPedido;
		}
		public function setIdPedido($idPedido){
			$this->idPedido = $idPedido;
		}
		public function getFactura_idFactura(){
			return $this->Factura_idFactura;
		}
		public function setFactura_idFactura($Factura_idFactura){
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function getCuenta_idCuenta(){
			return $this->Cuenta_idCuenta;
		}
		public function setCuenta_idCuenta($Cuenta_idCuenta){
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdPedido: " . $this->idPedido .
				" Factura_idFactura: " . $this->Factura_idFactura .
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta .
				" Estado: " . $this->estado;
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
