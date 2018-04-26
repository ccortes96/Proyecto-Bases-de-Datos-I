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

		public static function insertarRegistro($conexion, $pNombre, $sNombre, $pApellido, $genero, $email, $password){

			$pNombre = $conexion->antiInyeccion($pNombre);
			$sNombre = $conexion->antiInyeccion($sNombre);
			$pApellido = $conexion->antiInyeccion($pApellido);
			$genero = $conexion->antiInyeccion($genero);
			$email = $conexion->antiInyeccion($email);
			$password = $conexion->antiInyeccion($password);

			$query_call = sprintf("call SP_USUARIO_CUENTA ('$email', '$pNombre', '$sNombre', '$pApellido', $genero, 2, '$password', 1, 0.00, @_mensaje,@_ans);");
            $query_select="Select @_mensaje as mensaje,@_ans as ans;";

            $resultados_call=$conexion->ejecutarConsulta($query_call);
            $resultados_select=$conexion->ejecutarConsulta($query_select);
            $respuesta=$conexion->obtenerFila($resultados_select);

            return $respuesta["mensaje"];

		}

		public  function actualizarRegistro($conexion){

		}

		public static function eliminarRegistro($conexion, $id){

		}

		public static function login($conexion, $email, $password)
        {

            $query_call = sprintf("call SP_LOGIN ('%s', '%s',@_mensaje,@_ans);",
                    $conexion->antiInyeccion($email),
                    $conexion->antiInyeccion($password));
            $query_select="Select @_mensaje as mensaje,@_ans as ans;";

            $resultados_call=$conexion->ejecutarConsulta($query_call);
            $resultados_select=$conexion->ejecutarConsulta($query_select);
            $respuesta=$conexion->obtenerFila($resultados_select);



			if($respuesta['ans']==0){
				session_start();
				$id = Usuario::obteneridUsuarioSession($conexion, $email);
				$_SESSION['status']=true;
				$_SESSION['idUsuario'] = $id;
				$_SESSION['nombreCompleto'] = Usuario::obtenerNombreUsuario($conexion, $id);
				$respuesta['loggedin']=1;
				$respuesta['mensajeSesion']="Tiene acceso";
			}
			else
			{
				session_start();
				$_SESSION['status']=false;
				$respuesta['loggedin']=0;
				$respuesta['mensajeSesion'] = "No tiene acceso a esta direccion";
			}


            return $respuesta;
        }

		public static function obteneridUsuarioSession($conexion, $email)
		{
			/*Con este metodo se retornara el id del usuario, llamando a la funcion FN_OBTENER_ID_USUARIO, todo esto para asignarle este dato a la sesión.*/
			$sql = sprintf("SELECT FN_OBTENER_ID_USUARIO ('%s') AS IdUsuarioFunction;",
			$conexion->antiInyeccion($email));
			$resultado=$conexion->ejecutarConsulta($sql);
			$respuesta=$conexion->obtenerFila($resultado);
			$idUsuarioRespuesta = (int) $respuesta['IdUsuarioFunction'];
			return $idUsuarioRespuesta;
		}

		public static function obtenerNombreUsuario($conexion, $idUsuario)
		{
			$sql = "SELECT concat(u.pNombre, ' ', u.sNombre, ' ', u.pApellido) nombre 
				from usuario u 
				WHERE u.idUsuario = ".$idUsuario;
			$resultado=$conexion->ejecutarConsulta($sql);
			$respuesta=$conexion->obtenerFila($resultado);
			return $respuesta['nombre'];
		}

	}
?>
