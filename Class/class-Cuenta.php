<?php

	class Cuenta{

		private $idCuenta;
		private $TipoCuenta_idTipoCuenta;
		private $Usuario_idUsuario;
		private $fechaRegistro;
		private $contrasenia;
		private $Idioma_idIdioma;
		private $Saldo;

		public function __construct($idCuenta=null,
					$TipoCuenta_idTipoCuenta=null,
					$Usuario_idUsuario=null,
					$fechaRegistro=null,
					$contrasenia=null,
					$Idioma_idIdioma=null,
					$Saldo=null){
			$this->idCuenta = $idCuenta;
			$this->TipoCuenta_idTipoCuenta = $TipoCuenta_idTipoCuenta;
			$this->Usuario_idUsuario = $Usuario_idUsuario;
			$this->fechaRegistro = $fechaRegistro;
			$this->contrasenia = $contrasenia;
			$this->Idioma_idIdioma = $Idioma_idIdioma;
			$this->Saldo = $Saldo;
		}
		public function getIdCuenta(){
			return $this->idCuenta;
		}
		public function setIdCuenta($idCuenta){
			$this->idCuenta = $idCuenta;
		}
		public function getTipoCuenta_idTipoCuenta(){
			return $this->TipoCuenta_idTipoCuenta;
		}
		public function setTipoCuenta_idTipoCuenta($TipoCuenta_idTipoCuenta){
			$this->TipoCuenta_idTipoCuenta = $TipoCuenta_idTipoCuenta;
		}
		public function getUsuario_idUsuario(){
			return $this->Usuario_idUsuario;
		}
		public function setUsuario_idUsuario($Usuario_idUsuario){
			$this->Usuario_idUsuario = $Usuario_idUsuario;
		}
		public function getFechaRegistro(){
			return $this->fechaRegistro;
		}
		public function setFechaRegistro($fechaRegistro){
			$this->fechaRegistro = $fechaRegistro;
		}
		public function getContrasenia(){
			return $this->contrasenia;
		}
		public function setContrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}
		public function getIdioma_idIdioma(){
			return $this->Idioma_idIdioma;
		}
		public function setIdioma_idIdioma($Idioma_idIdioma){
			$this->Idioma_idIdioma = $Idioma_idIdioma;
		}
		public function getSaldo(){
			return $this->Saldo;
		}
		public function setSaldo($Saldo){
			$this->Saldo = $Saldo;
		}
		public function __toString(){
			return "IdCuenta: " . $this->idCuenta .
				" TipoCuenta_idTipoCuenta: " . $this->TipoCuenta_idTipoCuenta .
				" Usuario_idUsuario: " . $this->Usuario_idUsuario .
				" FechaRegistro: " . $this->fechaRegistro .
				" Contrasenia: " . $this->contrasenia .
				" Idioma_idIdioma: " . $this->Idioma_idIdioma .
				" Saldo: " . $this->Saldo;
		}

		#Funciones
		public static function listarTodos($conexion){

		}

		public function seleccionar($conexion){

		}

		public static function asaldo($conexion, $idUsuario, $idCuenta, $saldo){
			
			$query_call = sprintf("call SP_AGREGAR_SALDO($idUsuario,$idCuenta, $saldo, @_mensaje,@_ans);");
			
			$query_select = "Select @_mensaje as mensaje,@_ans as ans;";

			$resultados_call=$conexion->ejecutarConsulta($query_call);
			$resultados_select=$conexion->ejecutarConsulta($query_select);
            $respuesta=$conexion->obtenerFila($resultados_select);

            return $respuesta;

		}

		public  function actualizarRegistro($conexion){

		}

		public static function eliminarRegistro($conexion, $id){

		}

	}
?>
