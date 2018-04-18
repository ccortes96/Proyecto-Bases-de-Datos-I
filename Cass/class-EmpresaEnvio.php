<?php

	class EmpresaEnvio{

		private $idEmpresaEnvio;
		private $descripcion;

		public function __construct($idEmpresaEnvio=null,
					$descripcion=null){
			$this->idEmpresaEnvio = $idEmpresaEnvio;
			$this->descripcion = $descripcion;
		}
		public function getIdEmpresaEnvio(){
			return $this->idEmpresaEnvio;
		}
		public function setIdEmpresaEnvio($idEmpresaEnvio){
			$this->idEmpresaEnvio = $idEmpresaEnvio;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdEmpresaEnvio: " . $this->idEmpresaEnvio .
				" Descripcion: " . $this->descripcion;
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
