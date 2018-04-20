<?php

	class TipoImpuesto{

		private $idTipoImpuesto;
		private $descripcion;
		private $porcentajeImpuesto;
		private $estado;

		public function __construct($idTipoImpuesto=null,
					$descripcion=null,
					$porcentajeImpuesto=null,
					$estado=null){
			$this->idTipoImpuesto = $idTipoImpuesto;
			$this->descripcion = $descripcion;
			$this->porcentajeImpuesto = $porcentajeImpuesto;
			$this->estado = $estado;
		}
		public function getIdTipoImpuesto(){
			return $this->idTipoImpuesto;
		}
		public function setIdTipoImpuesto($idTipoImpuesto){
			$this->idTipoImpuesto = $idTipoImpuesto;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getPorcentajeImpuesto(){
			return $this->porcentajeImpuesto;
		}
		public function setPorcentajeImpuesto($porcentajeImpuesto){
			$this->porcentajeImpuesto = $porcentajeImpuesto;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "IdTipoImpuesto: " . $this->idTipoImpuesto .
				" Descripcion: " . $this->descripcion .
				" PorcentajeImpuesto: " . $this->porcentajeImpuesto .
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
