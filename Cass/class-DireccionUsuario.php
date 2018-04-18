<?php

	class DireccionUsuario{

		private $idDireccionUsuario;
		private $pais;
		private $estado_depto;
		private $ciudad;
		private $colonia;
		private $sector_calle;
		private $casa_edificio;
		private $codigoPostal;
		private $Usuario_idUsuario;

		public function __construct($idDireccionUsuario=null,
					$pais=null,
					$estado_depto=null,
					$ciudad=null,
					$colonia=null,
					$sector_calle=null,
					$casa_edificio=null,
					$codigoPostal=null,
					$Usuario_idUsuario=null){
			$this->idDireccionUsuario = $idDireccionUsuario;
			$this->pais = $pais;
			$this->estado_depto = $estado_depto;
			$this->ciudad = $ciudad;
			$this->colonia = $colonia;
			$this->sector_calle = $sector_calle;
			$this->casa_edificio = $casa_edificio;
			$this->codigoPostal = $codigoPostal;
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function getIdDireccionUsuario(){
			return $this->idDireccionUsuario;
		}
		public function setIdDireccionUsuario($idDireccionUsuario){
			$this->idDireccionUsuario = $idDireccionUsuario;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getEstado_depto(){
			return $this->estado_depto;
		}
		public function setEstado_depto($estado_depto){
			$this->estado_depto = $estado_depto;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function getColonia(){
			return $this->colonia;
		}
		public function setColonia($colonia){
			$this->colonia = $colonia;
		}
		public function getSector_calle(){
			return $this->sector_calle;
		}
		public function setSector_calle($sector_calle){
			$this->sector_calle = $sector_calle;
		}
		public function getCasa_edificio(){
			return $this->casa_edificio;
		}
		public function setCasa_edificio($casa_edificio){
			$this->casa_edificio = $casa_edificio;
		}
		public function getCodigoPostal(){
			return $this->codigoPostal;
		}
		public function setCodigoPostal($codigoPostal){
			$this->codigoPostal = $codigoPostal;
		}
		public function getUsuario_idUsuario(){
			return $this->Usuario_idUsuario;
		}
		public function setUsuario_idUsuario($Usuario_idUsuario){
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function __toString(){
			return "IdDireccionUsuario: " . $this->idDireccionUsuario .
				" Pais: " . $this->pais .
				" Estado_depto: " . $this->estado_depto .
				" Ciudad: " . $this->ciudad .
				" Colonia: " . $this->colonia .
				" Sector_calle: " . $this->sector_calle .
				" Casa_edificio: " . $this->casa_edificio .
				" CodigoPostal: " . $this->codigoPostal .
				" Usuario_idUsuario: " . $this->Usuario_idUsuario;
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
