<?php
  include("../Conexion/class-conexion.php");
  include("../class/class-Factura.php");

  if(isset($_POST["accion"])){
    $conexion = new Conexion();

    switch ($_POST['accion']) {
      case "listar-todos":
      break;

      case "pagar":
      session_start();
        $idUsuario = (int)$_SESSION['idUsuario'];

        $idCuenta = (int)$_SESSION['idCuenta'];

        if(isset($_POST["idFactura"])){
          $idFactura = (int)$_POST["idFactura"];
        }

        if(isset($_POST["idFormaEnvio"])){
          $idFormaEnvio = (int)$_POST["idFormaEnvio"];
        }

        if(isset($_POST["idClaseEnvio"])){
          $idClaseEnvio = (int)$_POST["idClaseEnvio"];
        }

        if(isset($_POST["idEmpresaEnvio"])){
          $idEmpresaEnvio = (int)$_POST["idEmpresaEnvio"];
        }

        if(isset($_POST["idDireccionEnvio"])){
          $idDireccionEnvio = $_POST["idDireccionEnvio"];
        }

        $res = Factura::pagar($conexion,$idUsuario,$idCuenta, $idFactura, $idFormaEnvio, $idClaseEnvio, $idEmpresaEnvio, $idDireccionEnvio);

        echo json_encode($res);

      break;

      case "cancelar":
        if(isset($_POST["idFactura"])){
          $idFactura = (int)$_POST["idFactura"];
        }

        $res = Factura::cancelar($conexion, $idFactura);

        echo json_encode($res);
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
