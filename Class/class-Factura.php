<?php

	class Factura{

		private $idFactura;
		private $Carrito_idCarrito;
		private $fecha;
		private $observaciones;
		private $estado;

		public function __construct($idFactura=null,
					$Carrito_idCarrito=null,
					$fecha=null,
					$observaciones=null,
					$estado=null){
			$this->idFactura = $idFactura;
			$this->Carrito_idCarrito = $Carrito_idCarrito;
			$this->fecha = $fecha;
			$this->observaciones = $observaciones;
			$this->estado = $estado;
		}
		public function getIdFactura(){
			return $this->idFactura;
		}
		public function setIdFactura($idFactura){
			$this->idFactura = $idFactura;
		}
		public function getCarrito_idCarrito(){
			return $this->Carrito_idCarrito;
		}
		public function setCarrito_idCarrito($Carrito_idCarrito){
			$this->Carrito_idCarrito = $Carrito_idCarrito;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getObservaciones(){
			return $this->observaciones;
		}
		public function setObservaciones($observaciones){
			$this->observaciones = $observaciones;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdFactura: " . $this->idFactura .
				" Carrito_idCarrito: " . $this->Carrito_idCarrito .
				" Fecha: " . $this->fecha .
				" Observaciones: " . $this->observaciones .
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
