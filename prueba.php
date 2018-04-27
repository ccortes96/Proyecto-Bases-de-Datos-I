<?php
	include("Class/class-Producto.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Producto::seleccionar($conexion);
    var_dump($respuesta);
    $conexion->cerrarConexion();

?>