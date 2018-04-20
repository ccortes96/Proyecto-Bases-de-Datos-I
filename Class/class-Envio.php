<?php

	class Envio{

		private $idEnvio;
		private $EmpresaEnvio_idEmpresaEnvio;
		private $FormaEnvio_idFormaEnvio;
		private $ClaseEnvio_idClaseEnvio;

		public function __construct($idEnvio=null,
					$EmpresaEnvio_idEmpresaEnvio=null,
					$FormaEnvio_idFormaEnvio=null,
					$ClaseEnvio_idClaseEnvio=null){
			$this->idEnvio = $idEnvio;
			$this->EmpresaEnvio_idEmpresaEnvio = $EmpresaEnvio_idEmpresaEnvio;
			$this->FormaEnvio_idFormaEnvio = $FormaEnvio_idFormaEnvio;
			$this->ClaseEnvio_idClaseEnvio = $ClaseEnvio_idClaseEnvio;
		}
		public function getIdEnvio(){
			return $this->idEnvio;
		}
		public function setIdEnvio($idEnvio){
			$this->idEnvio = $idEnvio;
		}
		public function getEmpresaEnvio_idEmpresaEnvio(){
			return $this->EmpresaEnvio_idEmpresaEnvio;
		}
		public function setEmpresaEnvio_idEmpresaEnvio($EmpresaEnvio_idEmpresaEnvio){
			$this->EmpresaEnvio_idEmpresaEnvio = $EmpresaEnvio_idEmpresaEnvio;
		}
		public function getFormaEnvio_idFormaEnvio(){
			return $this->FormaEnvio_idFormaEnvio;
		}
		public function setFormaEnvio_idFormaEnvio($FormaEnvio_idFormaEnvio){
			$this->FormaEnvio_idFormaEnvio = $FormaEnvio_idFormaEnvio;
		}
		public function getClaseEnvio_idClaseEnvio(){
			return $this->ClaseEnvio_idClaseEnvio;
		}
		public function setClaseEnvio_idClaseEnvio($ClaseEnvio_idClaseEnvio){
			$this->ClaseEnvio_idClaseEnvio = $ClaseEnvio_idClaseEnvio;
		}
		public function __toString(){
			return "IdEnvio: " . $this->idEnvio .
				" EmpresaEnvio_idEmpresaEnvio: " . $this->EmpresaEnvio_idEmpresaEnvio .
				" FormaEnvio_idFormaEnvio: " . $this->FormaEnvio_idFormaEnvio .
				" ClaseEnvio_idClaseEnvio: " . $this->ClaseEnvio_idClaseEnvio;
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
