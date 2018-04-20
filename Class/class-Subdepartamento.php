<?php

	class Subdepartamento{

		private $idSubdepartamento;
		private $descripcion;
		private $Departamento_idDepartamento;

		public function __construct($idSubdepartamento=null,
					$descripcion=null,
					$Departamento_idDepartamento=null){
			$this->idSubdepartamento = $idSubdepartamento;
			$this->descripcion = $descripcion;
			$this->Departamento_idDepartamento = $Departamento_idDepartamento;
		}
		public function getIdSubdepartamento(){
			return $this->idSubdepartamento;
		}
		public function setIdSubdepartamento($idSubdepartamento){
			$this->idSubdepartamento = $idSubdepartamento;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getDepartamento_idDepartamento(){
			return $this->Departamento_idDepartamento;
		}
		public function setDepartamento_idDepartamento($Departamento_idDepartamento){
			$this->Departamento_idDepartamento = $Departamento_idDepartamento;
		}
		public function __toString(){
			return "IdSubdepartamento: " . $this->idSubdepartamento .
				" Descripcion: " . $this->descripcion .
				" Departamento_idDepartamento: " . $this->Departamento_idDepartamento;
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
