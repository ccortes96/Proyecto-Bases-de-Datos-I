<?php
	include("../Conexion/class-conexion.php");
	include("../class/class-usuario.php");
	$respuesta = "";
	$conexion= new Conexion();
	if(isset($_POST['idpnombre'])){
		$pnombre= $_POST['idpnombre'];
	}

	if(isset($_POST['idsnombre'])){
		$snombre= $_POST['idsnombre'];
	}

	if(isset($_POST['idpapellido'])){
		$papellido= $_POST['idpapellido'];
	}

	if(isset($_POST['cbx_SeleccioneGenero'])){
		$genero = (int) $_POST['cbx_SeleccioneGenero'];
	}

	if(isset($_POST['idcorreo'])){
		$email = $_POST['idcorreo'];
	}

	if(isset($_POST['idcontrasenia'])){
		$password = $_POST['idcontrasenia'];
	}

	if($genero==0){
    $respuesta="Seleccione un Genero";  
  	}
  	else{
  		$respuesta = Usuario::insertarRegistro($conexion,$pnombre, $snombre,$papellido, $genero, $email, $password);
  		echo json_encode($respuesta);
  	}

    	$conexion->cerrarConexion();
?>