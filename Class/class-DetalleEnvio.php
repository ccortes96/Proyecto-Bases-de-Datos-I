<?php

	class DetalleEnvio{

		private $Producto_idProducto;
		private $Envio_idEnvio;
		private $estado;

		public function __construct($Producto_idProducto=null,
					$Envio_idEnvio=null,
					$estado=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Envio_idEnvio = $Envio_idEnvio;
			$this->estado = $estado;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getEnvio_idEnvio(){
			return $this->Envio_idEnvio;
		}
		public function setEnvio_idEnvio($Envio_idEnvio){
			$this->Envio_idEnvio = $Envio_idEnvio;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Envio_idEnvio: " . $this->Envio_idEnvio .
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
