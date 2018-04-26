<?php
	include("../Conexion/class-conexion.php");
	include("../class/class-usuario.php");

	if(isset($_POST['accion'])){
		$conexion= new Conexion();

			switch ($_POST['accion']) {
			case 'login':
				if(isset($_POST["username"])){
					$correo=$_POST["username"];
				}
				if(isset($_POST["pass"])){
					$contra=$_POST["pass"];
				}
				$respuesta = Usuario::login($conexion, $correo, $contra);
					echo json_encode($respuesta);


				break;

			case 'logout':
				//Caso CerrarSesion
				session_start();
				$_SESSION['status']=false; //Al cerrar la sesion el estado  de la misma cambia a falsa. 
				$respuesta['loggedin'] = 0; //El logeo del usuario dentro del sistema cambia a cero.
				session_destroy(); //se destruye la sesion.
				echo json_encode($respuesta);
				break;

			case 'obtenerNombreUsuario':
				session_start();
				echo json_encode($_SESSION['nombreCompleto']);
				break;
				
			default:
				echo json_encode("Petición inválida");
				break;
		}
	}
	else
		{
		echo json_encode("No se especificó petición");
		}

    	$conexion->cerrarConexion();
?>