<?php

	class DescuentoProductoPorFactura{

		private $DescuentoProducto_idDescuento;
		private $Factura_idFactura;

		public function __construct($DescuentoProducto_idDescuento=null,
					$Factura_idFactura=null){
			$this->DescuentoProducto_idDescuento = $DescuentoProducto_idDescuento;
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function getDescuentoProducto_idDescuento(){
			return $this->DescuentoProducto_idDescuento;
		}
		public function setDescuentoProducto_idDescuento($DescuentoProducto_idDescuento){
			$this->DescuentoProducto_idDescuento = $DescuentoProducto_idDescuento;
		}
		public function getFactura_idFactura(){
			return $this->Factura_idFactura;
		}
		public function setFactura_idFactura($Factura_idFactura){
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function __toString(){
			return "DescuentoProducto_idDescuento: " . $this->DescuentoProducto_idDescuento .
				" Factura_idFactura: " . $this->Factura_idFactura;
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
