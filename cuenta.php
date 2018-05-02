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

        /*Obteniendo el Saldo actual de la cuenta*/
        $sql = 'SELECT Saldo FROM Cuenta WHERE idCuenta = ' . $_SESSION['idCuenta'] . ' ';
        $result = $conexion->ejecutarConsulta($sql);
        $result2 = $conexion->obtenerFila($result);
        $result3 = $result2['Saldo'];
                            } 
else 
{
   
    header('Location:index.php');

    
}


?>

<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.1/examples/checkout/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="v3.ico">

    <title>Cuenta</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <header>
      <!--BOTONES SUPERIORES-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
        <ul class="navbar-nav mr-auto"> 
          <li class="nav-item active">
            <a  href="index.php" class="btn btn-outline-danger">INICIO</a>
            <a href="productoscarrito.php" class="btn btn-outline-info">Carrito</a>
            <a  href="logout.php" class="btn btn-outline-info">Salir</a>
          </li>
        </ul>
        </div>

        <!--BOTON SALDO-->
        <form class="form-inline my-2 my-lg-0" >
          <button class="btn btn-outline-info mr-sm-2" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modificar saldo</button>
          <h4 class=" my-2 my-sm-0 " style="color:#fff">  L. <?php echo (string)$result3; ?> </h4>
        </form> 
      </nav>
    </header>


    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="v3.png" alt="" width="72" height="72">
        <h2>Cuenta</h2>
        <p class="lead">VOL-UNAH</p>
      </div>


      <div class="container-fluid">
            <div class="container-fluid">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="form-actualizar" id="form-actualizar">

                        <h6>Primer Nombre <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
                            <input class="input" type="text" name="idpnombre" id="idpnombre" value="<?php echo $row['pNombre'] ?>" required>
                            <span class="focus-input100"></span>
                        </div>
                        <h6>Segundo Nombre<h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
                            <input class="input100" type="text" name="idsnombre" id="idsnombre" value="<?php echo $row['sNombre'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <h6>Primer Apellido <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Apellido Requerido">
                            <input class="input100" type="text" name="idpapellido" id="idpapellido" value="<?php echo $row['pApellido'] ?>">
                            <span class="focus-input100"></span>
                        </div>


                        <h6>Género <h6/>
                        <div class="dropdown validate-input m-b-16">

                            <select type="text" id="cbx_SeleccioneGenero" name="cbx_SeleccioneGenero" class="form-control m-b-16" value="<?php echo $row['Genero_idGenero'] ?>"  data-rule="minlen:4" data-msg="Seleccione un Genero">
                                <option value='0'>CAMBIAR GENERO</option>
                                <option value='1'>Masculino</option>
                                <option value='2'>Femenino</option>
                            </select>

                        </div>

                        <h6>Correo <h6/>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Correo Requerido">
                            <input class="input100" type="email" name="idcorreo" id="idcorreo" value="<?php echo $row['descripcioncorreo'] ?>" required autofocus>
                            <span class="focus-input100"></span>
                        </div>                

                        <h6>País <h6/>
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="pais" id="idpais" value="<?php echo $row['pais'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <h6>Estado o Departamento<h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="estado" id="idestado" value="<?php echo $row['estado_depto'] ?>">
                            <span class="focus-input100"></span>
                        </div>


                        <h6>Ciudad<h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="ciudad" id="idciudad" value="<?php echo $row['ciudad'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <h6>Colonia<h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="colonia" id="idcolonia" value="<?php echo $row['colonia'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <h6>Sector o Calle<h6/>

                        <div class="input validate-input m-b-16" >
                            <input class="input100" type="text" name="sector" id="idsector" value="<?php echo $row['sector_calle'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <h6>Casa <h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="casa" id="idcasa" value="<?php echo $row['casa_edificio'] ?>">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <h6>Código Postal<h6/>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" name="postal" id="idpostal" value="<?php echo $row['codigoPostal'] ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <br>

                        <div class="container-login100-form-btn m-t-17">
                            <input type="submit" class="btn btn-primary btn-outline-info btn-block" name="btn-actualizar" id="btn-actualizar" value="CAMBIAR DATOS">
                        </div>

                    </form>
                        <br>
                        <form  name="btn-cancelar" id="btn-cancelar">
                          <input type="submit" class="btn btn-primary btn-outline-danger btn-block" name="btn-cancelar" id="btn-cancelar" value="Cancelar">
                        </form>
                </div>
            </div>
        </div>

      



              <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Monto: L.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido Body Modal -->
        <form  id="form-edit1" name="form-edit1" method="post" enctype="multipart/form-data">
            <div class="form-group">


                        <!-- Contenido Comentarios -->
                        <div class="row border-chat">
                        <div class="col-md-12 col-sm-12 col-xs-12 second-section">
                        <div class="chat-section" id="chat-section" name="chat-section">

                        </div>
                        </div>
                        </div>


            <div class="form-group">
            <label for="ExampleTextArea-Descripcion"></label>
            <textarea class="form-control" id="TextArea-Descripcion1" name="TextArea-Descripcion1" placeholder="Ingrese el monto" rows="3" required></textarea>
            </div>


            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="btn-guardar" name="btn-guardar">Agregar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            </div>

      </form>
      </div>

    </div>
  </div>
</div>
                  
    </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p>
          <?php  
            if(isset($_SESSION["status"])==true){
            $mensaje = "Usuario: ".$_SESSION["nombre"];
            echo $mensaje;
            } ?> 
        </p>
        <p class="mb-1">© 2017-2018 VOL-UNAH</p>
        <ul class="list-inline">
            <a href="a4de2650-4dba-11e8-b174-0cc47a792c0a_id_a4de2650-4dba-11e8-b174-0cc47a792c0a.html">Ayuda</a>
        </ul>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js.descarga" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js.descarga"></script>
    <script src="js/bootstrap.min.js.descarga"></script>
    <script src="js/holder.min.js.descarga"></script>
    <script src="js/controlador-factura-cancelar.js"></script>
    <script src="js/controlador-cuenta-saldo.js"></script>
    <script src="js/controlador-factura-pagar"></script>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
   
  

</body></html>