<?php
	include("Class/class-Cuenta.php");
	include("Conexion/class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Cuenta::asaldo($conexion,24,24,20000);
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