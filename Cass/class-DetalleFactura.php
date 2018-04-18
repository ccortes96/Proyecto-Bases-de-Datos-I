<?php

	class DetalleFactura{

		private $Producto_idProducto;
		private $Factura_idFactura;
		private $cantidad;

		public function __construct($Producto_idProducto=null,
					$Factura_idFactura=null,
					$cantidad=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Factura_idFactura = $Factura_idFactura;
			$this->cantidad = $cantidad;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getFactura_idFactura(){
			return $this->Factura_idFactura;
		}
		public function setFactura_idFactura($Factura_idFactura){
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Factura_idFactura: " . $this->Factura_idFactura .
				" Cantidad: " . $this->cantidad;
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
