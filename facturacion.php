<?php
   session_start();

    include("Conexion/class-conexion.php");
    $conexion = new Conexion();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>VOL-UNAH</title>
       <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

        <meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
        <meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />

        <!-- JS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>  
        <script src="js/jquery-func.js" type="text/javascript"></script> 
            <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
         <link href="css/form-validation.css" rel="stylesheet">   
        <!-- End JS -->

</head>
<body>

       <!-- Shell -->   
        <div class="shell">

<!-- Header --> 
<div id="header">
                
<!--h1  style="color:white;" > VOL-UNAH</h1-->
                
<!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="index.php" class="active">INICIO</a></li>
                <?php
                  if(isset($_SESSION["status"])==true){

                    $boton ="<li><a  id=\"btn_Logout\"name=\"btn_Logout\" href=\"logout.php\">Salir</a></li>";
                    //echo $boton;

                    $boton1 = "<li><a  id=\"btn_Cuenta\"name=\"btn_Cuenta\" href=\"Cuenta.php\">Cuenta</a></li>";
                    //echo $boton1;

                    $boton2 = "<li><a  id=\"btn_Carrito\"name=\"btn_Carrito\" href=\"Carrito.php\">Carrito</a></li>";
                    //echo $boton2;

                    $botones=$boton1.$boton.$boton2;

                    echo $botones;

                  }

                  else{
                    $boton ="<li><a  id=\"btn_Login\"name=\"btn_Login\" href=\"iniciarsesion.php\">Iniciar Sesión</a></li>";
                    echo $boton;

                    $boton1 ="<li><a  id=\"btn_Registro\"name=\"btn_Registro\" href=\"registro.php\">Registrarse</a></li>";
                    echo $boton1;
                  }
                ?>
                
            </ul>
        </div>
        <!-- End Navigation -->
</div>
<!-- End Header -->



    <!-- Main -->
    <div id = "main">
        <div id = "content">
           <div class="factura" id= "factura">
            <h2> Factura <span></span></h2>   
                <div id = "content">
                    <fieldset>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <h5>Producto</h5>
                              <div>
                                <label>
                                    <h6>Samsung</h6>
                                </label>
                              </div>
                            </div>
                            <div class="col-sm">
                              <h5>Precio</h5>
                              <div>
                                <label>
                                    <h6>6000.00</h6>
                                </label>
                              </div>
                            </div>
                            <div class="col-sm">
                              <h5>Cantidad</h5>
                              <div>
                                <label>
                                    <h6 align="right" >6</h6>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                    </fieldset>
                </div>
           </div> 
        </div>
    </div>
    <!-- End Main -->





    <!-- Footer -->
    <div id="footer">
        <p class="left">
            <a href="Cuenta.php">Mi Cuenta</a>
            <span>|</span>
            <a href="#">Ayuda</a>
            <span>|</span>
              <div class="col-sm-6">
        </p>
        <p class="right">
            &copy; 2018 VOL-UNAH.   
        </p>
    </div>
    <!-- End Footer -->


    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">

                </div>
            </div>
            <div class="span4">
                <div class="widget">

                </div>
            </div>
            <div class="span4">
                <div class="widget">


                </div>
            </div>
        </div>
    </div>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p>

                    </p>
                </div>
                <div class="span6">
                    <div class="credits">
                        <p> 

                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
    
</div>  
<!-- End Shell -->
    </script>
</body>
</html>