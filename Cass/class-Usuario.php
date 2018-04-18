<?php

	class Usuario{

		private $idUsuario;
		private $pNombre;
		private $sNombre;
		private $pApellido;
		private $Genero_idGenero;

		public function __construct($idUsuario=null,
					$pNombre=null,
					$sNombre=null,
					$pApellido=null,
					$Genero_idGenero=null){
			$this->idUsuario = $idUsuario;
			$this->pNombre = $pNombre;
			$this->sNombre = $sNombre;
			$this->pApellido = $pApellido;
			$this->Genero_idGenero = $Genero_idGenero;
		}
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		public function getPNombre(){
			return $this->pNombre;
		}
		public function setPNombre($pNombre){
			$this->pNombre = $pNombre;
		}
		public function getSNombre(){
			return $this->sNombre;
		}
		public function setSNombre($sNombre){
			$this->sNombre = $sNombre;
		}
		public function getPApellido(){
			return $this->pApellido;
		}
		public function setPApellido($pApellido){
			$this->pApellido = $pApellido;
		}
		public function getGenero_idGenero(){
			return $this->Genero_idGenero;
		}
		public function setGenero_idGenero($Genero_idGenero){
			$this->Genero_idGenero = $Genero_idGenero;
		}
		public function __toString(){
			return "IdUsuario: " . $this->idUsuario .
				" PNombre: " . $this->pNombre .
				" SNombre: " . $this->sNombre .
				" PApellido: " . $this->pApellido .
				" Genero_idGenero: " . $this->Genero_idGenero;
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
