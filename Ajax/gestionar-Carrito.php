<?php
  include("../Conexion/class-conexion.php");
  include("../class/class-Carrito.php");


  if(isset($_POST["accion"])){
    $conexion = new Conexion();


    switch ($_POST['accion']) {
      case "listar-todos":
      break;

      case "seleccionar":
            break;

      case "eliminar":
        session_start();
        if(isset($_POST["idProducto"])){
          $idProducto = (int)$_POST["idProducto"];
        }

        $carrito = (int)$_SESSION['idCarrito'];

        $res = Carrito::eliminarRegistro($conexion, $carrito, $idProducto);

        echo json_encode($res);

      break;

      case "agregar":
        session_start();
        if(isset($_POST["idProducto"])){
          $idProducto = (int)$_POST["idProducto"];
        }
        if(isset($_POST["cantidad"])){
          $cantidad = (int)$_POST["cantidad"];        
        }

        $carrito = (int)$_SESSION['idCarrito'];

        $res = Carrito::insertarRegistro($conexion, $carrito, $idProducto, $cantidad);

        echo json_encode($res);

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
