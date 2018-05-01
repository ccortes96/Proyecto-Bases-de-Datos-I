<?php
	include("Class/class-Factura.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Factura::pagar($conexion,24,24,80,2,1,1,1,1);
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