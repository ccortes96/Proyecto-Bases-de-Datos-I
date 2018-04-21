<?php
	include("../Conexion/class-conexion.php");
	include("../class/class-usuario.php");
	$conexion= new Conexion();
	if(isset($_POST["inputEmail"])){
		$correo=$_POST["inputEmail"];
	}
	if(isset($_POST["inputPassword"])){
		$contra=$_POST["inputPassword"];
	}
	$respuesta = Usuario::login($conexion, $correo, $contra);
   		echo json_encode($respuesta);
    	$conexion->cerrarConexion();
?>