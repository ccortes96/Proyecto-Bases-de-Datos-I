<?php
  include("../Conexion/class-conexion.php");
  include("../Class/class-Producto.php");
  if(isset($_POST["accion"])){
    $conexion = new Conexion();
    /*switch ($_POST['accion']) {
      case "listar-todos":

      break;

      case "seleccionar":*/
        $respuesta=Producto::seleccionar($conexion);
        echo json_encode($respuesta);
      /*break;

      case "eliminar-registro":
      break;

      case "insertar-registro":
      break;

      case "actualizar-registro":
      break;

      default:
        echo json_encode("Petición inválida");
      break;
    }*/
    $conexion->cerrarConexion();
  }else{
    echo json_encode("No se especifico peticion");
  }
?>
