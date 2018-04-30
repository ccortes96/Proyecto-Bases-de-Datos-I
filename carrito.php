<?php
  include("Conexion/class-conexion.php");
  include("class/class-Carrito.php");

$conexion = new Conexion();
session_start();

	$v1 = (int)$_GET["cantidad"];
	$v2 = (int)$_GET["idProducto"];
	$carrito = 1;
	$res = Carrito::insertarRegistro($conexion, $carrito, $v2, $v1);
	var_dump($res);
?>


