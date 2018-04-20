<?php

	class Descuento{

		private $idDescuento;
		private $descripcion;
		private $estado;
		private $porcentajeDescuento;

		public function __construct($idDescuento=null,
					$descripcion=null,
					$estado=null,
					$porcentajeDescuento=null){
			$this->idDescuento = $idDescuento;
			$this->descripcion = $descripcion;
			$this->estado = $estado;
			$this->porcentajeDescuento = $porcentajeDescuento;
		}
		public function getIdDescuento(){
			return $this->idDescuento;
		}
		public function setIdDescuento($idDescuento){
			$this->idDescuento = $idDescuento;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getPorcentajeDescuento(){
			return $this->porcentajeDescuento;
		}
		public function setPorcentajeDescuento($porcentajeDescuento){
			$this->porcentajeDescuento = $porcentajeDescuento;
		}
		public function __toString(){
			return "IdDescuento: " . $this->idDescuento .
				" Descripcion: " . $this->descripcion .
				" Estado: " . $this->estado .
				" PorcentajeDescuento: " . $this->porcentajeDescuento;
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
