<?php
session_start();

    include("Conexion/class-conexion.php");
    $conexion = new Conexion();

     if(isset($_SESSION["status"])==true){

        $idCuenta = $_SESSION['idCuenta'];
        
        $query4 = 'SELECT idFactura FROM Factura WHERE Carrito_idCarrito = '.$_SESSION['idCarrito'].'  AND estado = "P";';
        $resIDF = $conexion->ejecutarConsulta($query4);
        $resIDF1 = $conexion->obtenerFila($resIDF);
        $resIDF2 = $resIDF1['idFactura'];


        /*--------------------------------------------------------*/
        /*Obteniendo Detalles de la factura*/
        $sqlFac = "SELECT pro.nombre nombre, pro.precioVenta precioVenta, df.cantidad cantidad FROM ((Factura fac INNER JOIN  DetalleFactura df ON fac.idFactura = df.Factura_idFactura)
        INNER JOIN Producto pro ON df.Producto_idProducto = pro.idProducto)
        WHERE fac.idFactura = $resIDF2;";
        
        $resultFac = $conexion->ejecutarConsulta($sqlFac);

        /*--------------------------------------------------------*/
        /*Obteniendo el Total*/
        $sqlTotal = "SELECT vwt.Total Total, vwt.Subtotal Subtotal, vwt.PorcentajeDescuento PorcentajeDescuento, vwt.PorcentajeImpuesto PorcentajeImpuesto FROM vw_Total vwt WHERE vwt.IdFactura = $resIDF2;";
        $resultTot = $conexion->ejecutarConsulta($sqlTotal);
        $resultTotal = $conexion->obtenerFila($resultTot);
        /*--------------------------------------------------------*/
        /*Obteniendo el Saldo actual de la cuenta*/
        $sql = 'SELECT Saldo FROM Cuenta WHERE idCuenta = ' . $_SESSION['idCuenta'] . ' ';
        $result = $conexion->ejecutarConsulta($sql);
        $result2 = $conexion->obtenerFila($result);
        $result3 = $result2['Saldo'];

        /*--------------------------------------------------------*/
        $query = "SELECT idFormaEnvio, descripcion FROM FormaEnvio ORDER BY descripcion;";
        $resFEnvios = $conexion->ejecutarConsulta($query);

        /*--------------------------------------------------------*/
        $query1 = "SELECT idClaseEnvio, descripcion FROM ClaseEnvio ORDER BY descripcion;";
        $resCEnvios = $conexion->ejecutarConsulta($query1);

        /*--------------------------------------------------------*/
        $query2 = "SELECT idEmpresaEnvio, descripcion FROM EmpresaEnvio ORDER BY descripcion;";
        $resEEnvios = $conexion->ejecutarConsulta($query2);

        /*--------------------------------------------------------*/
        $query3 = 'SELECT * FROM DireccionUsuario WHERE Usuario_idUsuario = '.$_SESSION['idUsuario'].' ;';
        $resDireccion = $conexion->ejecutarConsulta($query3);


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

    <title>Factura</title>

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
            <a href="cuenta.php" class="btn btn-outline-info">Cuenta</a>
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
        <h2>Facturación</h2>
        <p class="lead">VOL-UNAH</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <div class="row">
        <div class="col-md-8 order-md-1">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <nav class="navbar navbar-light bg-light">
                  <a class="navbar-brand" >Compra:</a>
                </nav>
              </tr>
            </thead>
            <tbody>
              <!-- Subtotal -->
              <tr>
                <th scope="row">*</th>
                <td>Subtotal:</td>
                <td> L. <?php echo $resultTotal["Subtotal"];?></td>
              </tr>
              <!-- Impuesto -->
              <tr>
                <th scope="row">*</th>
                <td>Impuesto:</td>
                <td>% <?php echo $resultTotal["PorcentajeImpuesto"]; ?></td>
              </tr>
              <!-- Descuento -->
              <tr>
                <th scope="row">*</th>
                <td>Descuento:</td>
                <td>% <?php echo $resultTotal["PorcentajeDescuento"]; ?></td>
              </tr>
              <!-- Total -->
              <tr>
                <th scope="row">*</th>
                <td>Total:</td>
                <td>L. <?php echo $resultTotal["Total"]; ?></td>
              </tr>
            </tbody>
          </table>
          </div>
          </div>
        </div>


        <div class="col-md-8 order-md-1">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            <tbody>
              
                <?php
                  if ($resultFac->num_rows > 0) {
                    $contador = 0;
                    while ($row = $resultFac->fetch_assoc()) {
                      echo 
                      '<tr>'.
                      '<th scope = "row">'.($contador + 1).'</th>'.
                      '<td>'.$row["nombre"].'</td>'.
                      '<td>'.$row["precioVenta"].'</td>'.
                      '<td>'.$row["cantidad"].'</td>'.
                      '</tr>';
                      ($contador += 1);
                    }
                  }
                  else {
                    echo "0 results";
                }
                ?>

            </tbody>
          </table>
          </div>


        </div>

    <form name="btn-pagar" id="btn-pagar">
      <!-- Forma de envío --> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="idFormaEnvio">...Forma de envío...</label>
        </div>
        <select class="custom-select" id="idFormaEnvio" name="idFormaEnvio" required>
          <option selected>Elija</option>
            <?php while($rowFEnvios = mysqli_fetch_array($resFEnvios)) { ?>
              <option value="<?php echo $rowFEnvios[0]; ?>" ><?php echo $rowFEnvios[1]; ?> </option>
            <?php } ?>
        </select>
      </div>

      <!-- Clase de envío -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="idClaseEnvio">....Clase de envío....</label>
        </div>
        <select class="custom-select" name="idClaseEnvio" id="idClaseEnvio" required>
          <option selected>Elija</option>
            <?php while($rowCEnvios = mysqli_fetch_array($resCEnvios)) { ?>
              <option value="<?php echo $rowCEnvios[0]; ?>" ><?php echo $rowCEnvios[1]; ?> </option>
            <?php } ?>
        </select>
      </div>


      <!-- Empresa de envío -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="idEmpresaEnvio">.Empresa de envío.</label>
        </div>
        <select class="custom-select" name="idEmpresaEnvio" id="idEmpresaEnvio" required>
          <option selected>Elija</option>
            <?php while($rowEEnvios = mysqli_fetch_array($resEEnvios)) { ?>
              <option value="<?php echo $rowEEnvios[0]; ?>" ><?php echo $rowEEnvios[1]; ?> </option>
            <?php } ?>
        </select>
      </div>


      <!-- Dirección de envío -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="idDireccionEnvio">Dirección de envío</label>
        </div>
        <select class="custom-select" name="idDireccionEnvio" id="idDireccionEnvio" required>
          <option selected>Elija</option>
            <?php while($rowDEnvios = mysqli_fetch_array($resDireccion)) { ?>
              <option value="<?php echo $rowDEnvios[0]; ?>" ><?php $dir=($rowDEnvios['pais'].', '.$rowDEnvios['estado_depto'].', '.$rowDEnvios['ciudad'].', '.$rowDEnvios['colonia'].', '.$rowDEnvios['sector_calle'].', '.$rowDEnvios['casa_edificio'].', '.$rowDEnvios['codigoPostal']);  echo $dir; ?> </option>
            <?php } ?>
        </select>
      </div>
      <input type="hidden" name="idFactura" id="idFactura" value="<?php echo $resIDF2; ?>">
        <button type="submit" class="btn btn-primary btn-outline-info btn-block" name="btn-pagar" id="btn-pagar">Pagar</button>
    </form>
      

    <form  name="btn-cancelar" id="btn-cancelar">
      <input type="hidden" name="idFactura" value="<?php echo $resIDF2 ?>" id="idFactura">
      <input type="submit" class="btn btn-primary btn-outline-danger btn-block" name="btn-cancelar" id="btn-cancelar" value="Cancelar">
    </form>
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