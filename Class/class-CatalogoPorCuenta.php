=null<?php

	class CatalogoPorCuenta{

		private $Producto_idProducto;
		private $Cuenta_idCuenta;
		private $cantidad;
		private $Oferta_idOferta;

		public function __construct($Producto_idProducto=null,
					$Cuenta_idCuenta=null,
					$cantidad=null,
					$Oferta_idOferta=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
			$this->cantidad = $cantidad;
			$this->Oferta_idOferta = $Oferta_idOferta;
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
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getOferta_idOferta(){
			return $this->Oferta_idOferta;
		}
		public function setOferta_idOferta($Oferta_idOferta){
			$this->Oferta_idOferta = $Oferta_idOferta;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta .
				" Cantidad: " . $this->cantidad .
				" Oferta_idOferta: " . $this->Oferta_idOferta;
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
