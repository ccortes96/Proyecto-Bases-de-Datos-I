<?php


	class Carrito{

		private $idCarrito;
		private $Cuenta_idCuenta;

		public function __construct($idCarrito,
					$Cuenta_idCuenta){
			$this->idCarrito = $idCarrito;
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function getIdCarrito(){
			return $this->idCarrito;
		}
		public function setIdCarrito($idCarrito){
			$this->idCarrito = $idCarrito;
		}
		public function getCuenta_idCuenta(){
			return $this->Cuenta_idCuenta;
		}
		public function setCuenta_idCuenta($Cuenta_idCuenta){
			$this->Cuenta_idCuenta = $Cuenta_idCuenta;
		}
		public function __toString(){
			return "IdCarrito: " . $this->idCarrito . 
				" Cuenta_idCuenta: " . $this->Cuenta_idCuenta;
		}

		#Funciones
		public static function listarTodos($conexion){

		}

		public function seleccionar($conexion){

		}

		public static function insertarRegistro($conexion, $idCarrito, $idProducto, $Cantidad){

			$query_call = sprintf("call SP_AGREGAR_CARRITO($idCarrito, $idProducto, $Cantidad, @_mensaje,@_ans);");
			
			$query_select = "Select @_mensaje as mensaje,@_ans as ans;";

			$resultados_call=$conexion->ejecutarConsulta($query_call);
			$resultados_select=$conexion->ejecutarConsulta($query_select);
            $respuesta=$conexion->obtenerFila($resultados_select);

            return $respuesta;

		}

		public  function actualizarRegistro($conexion){

		}

		public static function eliminarRegistro($conexion, $idCarrito, $idProducto){
			$query_call = sprintf("call SP_ELIMINAR_CARRITO($idCarrito, $idProducto, @_mensaje,@_ans);");
			
			$query_select = "Select @_mensaje as mensaje,@_ans as ans;";

			$resultados_call=$conexion->ejecutarConsulta($query_call);
			$resultados_select=$conexion->ejecutarConsulta($query_select);
            $respuesta=$conexion->obtenerFila($resultados_select);

            return $respuesta;
		}

	}
?>
