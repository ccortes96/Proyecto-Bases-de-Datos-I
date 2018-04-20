<?php

	class Deseo{

		private $Producto_idProducto;
		private $Cuenta_idCuenta;
		private $fecha;

		public function __construct($Producto_idProducto=null,
					$Cuenta_idCuenta=null,
					$fecha=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
			$this->fecha = $fecha;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getCuenta_idCuenta(){
			return $this->Cuenta_idCuenta;
		}
		public function setCuenta_idCuenta($Cuenta_idCuenta){
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta .
				" Fecha: " . $this->fecha;
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
