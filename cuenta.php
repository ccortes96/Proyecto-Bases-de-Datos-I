<?php
session_start();
include("Conexion/class-conexion.php");
$conexion = new Conexion();
  if(isset($_SESSION["status"])==true){
                           
                $sql = 'SELECT cu.idCuenta,usu.idUsuario,usu.pNombre,usu.sNombre,usu.pApellido,usu.Genero_idGenero,cu.Saldo,ge.descripcion descripciongenero ,celu.descripcion decripcioncelular,celu.idCelular , correo.descripcion descripcioncorreo,cu.contrasenia contrasenia, diri.pais,diri.ciudad,diri.colonia,diri.sector_calle,diri.codigoPostal,diri.casa_edificio,diri.estado_depto 
                    FROM cuenta cu 
                    INNER JOIN usuario usu on cu.Usuario_idUsuario = usu.idUsuario 
                    INNER JOIN genero ge on ge.idGenero = usu.Genero_idGenero 
                    INNER JOIN celular celu on celu.Usuario_idUsuario = usu.idUsuario 
                    INNER JOIN correousuario correo on correo.Usuario_idUsuario = usu.idUsuario 
                    INNER JOIN telefonousuario teleu on teleu.Usuario_idUsuario = usu.idUsuario 
                    INNER JOIN direccionusuario diri on diri.Usuario_idUsuario = usu.idUsuario 
                    WHERE usu.idUsuario = ' . $_SESSION['idUsuario'] . ' ';

$result = $conexion->ejecutarConsulta($sql);
$row = $result->fetch_assoc();
                            } 
else 
{
   
    header('Location:index.php');

    
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>

            <!--header>

            <div class="navbar navbar-fixed-top">
                <div class="navbar-INNER">
                    <div class="container">

                        <a class="brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>

                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown">

                                        <a href="index.php">Inicio</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Vehículos</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="verAutos.php">Ver Todo</a></li>
                                            <li><a href="verAutosRenta.php">Renta</a></li>
                                            <li><a href="verAutosVenta.php">Venta</a></li>
                                            <li class="dropdown"><a href="#">Agregar</a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="InsertarAutoCliente.php">Agregar Auto Cliente</a></li>
                                                    <li><a href="InsertarAutoEmpresa.php">Agregar Auto Empresa</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown active">
                                        <a href="#">Personas</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"><a href="#">Clientes</a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="InsertarCliente.php">Agregar Cliente</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Empleados</a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="InsertarEmpleado.php">Agregar Empleado</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Mantenimiento</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">Servicios</a></li>
                                            <li><a href="pricingtable.html">Repuestos</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Facturacion</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="InsertarFacturaRenta.php">Renta</a></li>
                                            <li><a href="InsertarFacturaVenta.php">Venta</a></li>
                                            <li><a href="InsertarFacturaMantenimiento.php">Mantenimienro</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="Sucursales.php">Sucursales</a>

                                    </li>

                                    <?php
                                    if(isset($_SESSION["status"])==true){
                                    $boton ="<li><a  id=\"btn_Logout\" name=\"btn_Logout\" href=\"includes/logout.php\">Cerrar Sesión</a></li>";
                                    echo $boton;
                                    }
                                    else{
                                    $boton1 ="<li><a  id=\"btn_Log\" name=\"btn_Log\" href=\"login.php\">Iniciar Sesión</a></li>";
                                    echo $boton1;
                                    }
                                    ?>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header-->








            <header>
            <div class="navbar navbar-fixed-top">
                <div class="navbar-INNER">
                    <div class="container">

                        <a href="index.php" class="active">INICIO</a>
                        <?php
                          if(isset($_SESSION["status"])==true){

                            $boton ="<a  id=\"btn_Logout\"name=\"btn_Logout\" href=\"logout.php\">Salir</a>";
                            //echo $boton;

                            $boton1 = "<a  id=\"btn_Cuenta\"name=\"btn_Cuenta\" href=\"cuenta.php\">Cuenta</a>";
                            //echo $boton1;

                            $boton2 = "<a  id=\"btn_Carrito\"name=\"btn_Carrito\" href=\"productoscarrito.php\">Carrito</a>";
                            //echo $boton2;

                            $botones=$boton1.$boton.$boton2;

                            echo $botones;

                          }

                          else{
                            $boton ="<a  id=\"btn_Login\"name=\"btn_Login\" href=\"iniciarsesion.php\">Iniciar Sesión</a>";
                            echo $boton;

                            $boton1 ="<a  id=\"btn_Registro\"name=\"btn_Registro\" href=\"registro.php\">Registrarse</a>";
                            echo $boton1;
                          }
                        ?>
                    </div>
                </div>
            </div>
            </header>    


        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="form-registro" id="form-registro">
                        <span class="login100-form-title p-b-51">
                            Perfil


                        </span>

                        <h6>PRIMER NOMBRE <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
                            <input class="input100" type="text" name="idpnombre" id="idpnombre" value="<?php echo $row['pNombre'] ?>" required>
                            <span class="focus-input100"></span>
                        </div>
<h6>SEGUNDO NOMBRE <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
                            <input class="input100" type="text" name="idsnombre" id="idsnombre" value="<?php echo $row['sNombre'] ?>">
                            <span class="focus-input100"></span>
                        </div>
<h6>PRIMER APELLIDO <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Apellido Requerido">
                            <input class="input100" type="text" name="idpapellido" id="idpapellido" value="<?php echo $row['pApellido'] ?>">
                            <span class="focus-input100"></span>
                        </div>
<h6>GÉNERO <h6/>
                        <div class="dropdown validate-input m-b-16">

                            <select type="text" id="cbx_SeleccioneGenero" name="cbx_SeleccioneGenero" class="form-control m-b-16" value="<?php echo $row['Genero_idGenero'] ?>"  data-rule="minlen:4" data-msg="Seleccione un Genero">
                                <option value='0'>CAMBIAR GENERO</option>
                                <option value='1'>Masculino</option>
                                <option value='2'>Femenino</option>
                            </select>

                        </div>
<h6>CORREO <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Correo Requerido">
                            <input class="input100" type="email" name="idcorreo" id="idcorreo" value="<?php echo $row['descripcioncorreo'] ?>" required autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        

<h6>PAÍS <h6/>
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="pais" id="idpais" value="<?php echo $row['pais'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        

                        <h6>CASA <h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="casa" id="idcasa" value="<?php echo $row['casa_edificio'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                            <h6>SALDO<h6/>
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="saldo" id="idsaldo" value="<?php echo $row['Saldo'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        

                        <div class="flex-sb-m w-full p-t-3 p-b-24">



                        </div>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" name="btn-continuar" id="btn-continuar" type="submit">
                                CAMBIAR DATOS
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <!--===============================================================================================-->
        <script src="js/controlador-registro.js"></script>

    </body>
</html>

