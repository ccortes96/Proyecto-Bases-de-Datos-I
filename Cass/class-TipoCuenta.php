<?php

	class TipoCuenta{

		private $idTipoCuenta;
		private $descripcion;

		public function __construct($idTipoCuenta=null,
					$descripcion=null){
			$this->idTipoCuenta = $idTipoCuenta;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoCuenta(){
			return $this->idTipoCuenta;
		}
		public function setIdTipoCuenta($idTipoCuenta){
			$this->idTipoCuenta = $idTipoCuenta;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function toString(){
			return "IdTipoCuenta: " . $this->idTipoCuenta .
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
