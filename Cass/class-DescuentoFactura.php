<?php

	class DescuentoFactura{

		private $Factura_idFactura;
		private $Descuento_idDescuento;

		public function __construct($Factura_idFactura=null,
					$Descuento_idDescuento=null){
			$this->Factura_idFactura = $Factura_idFactura;
			$this->Descuento_idDescuento = $Descuento_idDescuento;
		}
		public function getFactura_idFactura(){
			return $this->Factura_idFactura;
		}
		public function setFactura_idFactura($Factura_idFactura){
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function getDescuento_idDescuento(){
			return $this->Descuento_idDescuento;
		}
		public function setDescuento_idDescuento($Descuento_idDescuento){
			$this->Descuento_idDescuento = $Descuento_idDescuento;
		}
		public function __toString(){
			return "Factura_idFactura: " . $this->Factura_idFactura .
				" Descuento_idDescuento: " . $this->Descuento_idDescuento;
		}
	}
?>
