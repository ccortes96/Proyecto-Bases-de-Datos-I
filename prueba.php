<?php
	include("Class/class-Usuario.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Usuario::obtenerNombreUsuario($conexion,1);
    var_dump($respuesta);
    $conexion->cerrarConexion();

?>