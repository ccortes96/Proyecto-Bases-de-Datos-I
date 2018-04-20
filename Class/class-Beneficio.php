<?php

	class Beneficio{

		private $idBeneficio;
		private $descripcion;
		private $estado;

		public function __construct($idBeneficio=null,
					$descripcion=null,
					$estado=null){
			$this->idBeneficio = $idBeneficio;
			$this->descripcion = $descripcion;
			$this->estado = $estado;
		}
		public function getIdBeneficio(){
			return $this->idBeneficio;
		}
		public function setIdBeneficio($idBeneficio){
			$this->idBeneficio = $idBeneficio;
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
		public function __toString(){
			return "IdBeneficio: " . $this->idBeneficio .
				" Descripcion: " . $this->descripcion .
				" Estado: " . $this->estado;
		}

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
