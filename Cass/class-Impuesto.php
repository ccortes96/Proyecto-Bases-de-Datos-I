<?php

	class Impuesto{

		private $Factura_idFactura;
		private $TipoImpuesto_idTipoImpuesto;

		public function __construct($Factura_idFactura=null,
					$TipoImpuesto_idTipoImpuesto=null){
			$this->Factura_idFactura = $Factura_idFactura;
			$this->TipoImpuesto_idTipoImpuesto = $TipoImpuesto_idTipoImpuesto;
		}
		public function getFactura_idFactura(){
			return $this->Factura_idFactura;
		}
		public function setFactura_idFactura($Factura_idFactura){
			$this->Factura_idFactura = $Factura_idFactura;
		}
		public function getTipoImpuesto_idTipoImpuesto(){
			return $this->TipoImpuesto_idTipoImpuesto;
		}
		public function setTipoImpuesto_idTipoImpuesto($TipoImpuesto_idTipoImpuesto){
			$this->TipoImpuesto_idTipoImpuesto = $TipoImpuesto_idTipoImpuesto;
		}
		public function __toString(){
			return "Factura_idFactura: " . $this->Factura_idFactura .
				" TipoImpuesto_idTipoImpuesto: " . $this->TipoImpuesto_idTipoImpuesto;
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
