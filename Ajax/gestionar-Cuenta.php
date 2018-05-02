<?php
  include("../Conexion/class-conexion.php");
  include("../class/class-Cuenta.php");

  if(isset($_POST["accion"])){
    $conexion = new Conexion();

    switch ($_POST['accion']) {
      case "listar-todos":
      break;

      case "asaldo":
      session_start();
        $idUsuario = (int)$_SESSION['idUsuario'];

        $idCuenta = (int)$_SESSION['idCuenta'];

        if(isset($_POST["saldo"])){
          $saldo = (float)$_POST["saldo"];
        }

        $res = Cuenta::asaldo($conexion,$idUsuario,$idCuenta, $saldo);

        echo json_encode($res);

      break;

      case "cancelar":
      break;

      case "insertar-registro":
      break;

      case "actualizar-registro":
      break;

      default:
        echo json_encode("Petición inválida");
      break;
    }
    $conexion->cerrarConexion();
  }else{
    echo json_encode("No se especificó petición");
  }
?>
