<?php
	include("Class/class-Carrito.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Carrito::eliminarRegistro($conexion,1,3);
    var_dump($respuesta);
    $conexion->cerrarConexion();

?>

<!--DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html-->