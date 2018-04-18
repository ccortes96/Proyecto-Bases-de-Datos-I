<?php

    include ("../class/class-conexion.php");
    include ("../class/class-usuario.php");


        $objConexion=new Conexion();
    if (isset($_POST['accion'])) {
        switch ($_POST["accion"]) {
            case 'iniciar-sesion':
            break;

            case 'cerrar-sesion':
            break;

            default:
            break;
        }
    }
    $objConexion->cerrarConexion();

?>
