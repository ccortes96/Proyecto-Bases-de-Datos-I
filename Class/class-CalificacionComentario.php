<?php

	class CalificacionComentario{

		private $Producto_idProducto;
		private $Cuenta_idCuenta;
		private $TipoCalificacion_idTipoCalificacion;
		private $comentario;

		public function __construct($Producto_idProducto=null,
					$Cuenta_idCuenta=null,
					$TipoCalificacion_idTipoCalificacion=null,
					$comentario=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
			$this->TipoCalificacion_idTipoCalificacion = $TipoCalificacion_idTipoCalificacion;
			$this->comentario = $comentario;
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
		public function getTipoCalificacion_idTipoCalificacion(){
			return $this->TipoCalificacion_idTipoCalificacion;
		}
		public function setTipoCalificacion_idTipoCalificacion($TipoCalificacion_idTipoCalificacion){
			$this->TipoCalificacion_idTipoCalificacion = $TipoCalificacion_idTipoCalificacion;
		}
		public function getComentario(){
			return $this->comentario;
		}
		public function setComentario($comentario){
			$this->comentario = $comentario;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta .
				" TipoCalificacion_idTipoCalificacion: " . $this->TipoCalificacion_idTipoCalificacion .
				" Comentario: " . $this->comentario;
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
