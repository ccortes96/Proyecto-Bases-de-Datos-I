<?php

	class DescuentoProducto{

		private $idDescuento;
		private $Producto_idProducto;
		private $descripcion;
		private $porcenatajeDescuento;
		private $estado;

		public function __construct($idDescuento=null,
					$Producto_idProducto=null,
					$descripcion=null,
					$porcenatajeDescuento=null,
					$estado=null){
			$this->idDescuento = $idDescuento;
			$this->Producto_idProducto = $Producto_idProducto;
			$this->descripcion = $descripcion;
			$this->porcenatajeDescuento = $porcenatajeDescuento;
			$this->estado = $estado;
		}
		public function getIdDescuento(){
			return $this->idDescuento;
		}
		public function setIdDescuento($idDescuento){
			$this->idDescuento = $idDescuento;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getPorcenatajeDescuento(){
			return $this->porcenatajeDescuento;
		}
		public function setPorcenatajeDescuento($porcenatajeDescuento){
			$this->porcenatajeDescuento = $porcenatajeDescuento;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdDescuento: " . $this->idDescuento .
				" Producto_idProducto: " . $this->Producto_idProducto .
				" Descripcion: " . $this->descripcion .
				" PorcenatajeDescuento: " . $this->porcenatajeDescuento .
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
