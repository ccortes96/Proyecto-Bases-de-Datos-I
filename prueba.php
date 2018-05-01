<?php
	include("Class/class-Factura.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Factura::cancelar($conexion,68);
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