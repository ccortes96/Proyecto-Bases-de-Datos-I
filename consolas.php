<?php
session_start();
    include("Conexion/class-conexion.php");
    $conexion = new Conexion();

    $sql = "select * from Producto pro inner join
    ProductoPorSubdepartamento pps on
    pro.idProducto=pps.Producto_idProducto
    inner join Subdepartamento sub on
    sub.idSubdepartamento=pps.Subdepartamento_idSubdepartamento
    inner join Departamento dep on dep.idDepartamento
    =sub.Departamento_idDepartamento inner join ImagenProducto img on img.Producto_idProducto =pro.idProducto
    where sub.idSubdepartamento=8;";

    $result = $conexion->ejecutarConsulta($sql);

    $sql2 = 'select DISTINCT dep.descripcion from Departamento dep inner join Subdepartamento sub on dep.idDepartamento=sub.Departamento_idDepartamento';
    $result2 = $conexion->ejecutarConsulta($sql2);
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
    <!-- Main -->
    <div id="main">
        <div class="cl">&nbsp;</div>
        
        <!-- Content -->
        <div id="content">
            
            <!-- Content Slider -->
            <div id="slider" class="box">
                <div id="slider-holder">

                        <li><a href="#"><img src="css/images/banner.jpg" width="980" height="256" /></a></li>
                </div>
                <!--div id="slider-nav">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                </div-->
            </div>
            <!-- End Content Slider -->

            <!-- Products -->
            <?php
                if ($result->num_rows > 0) {
                // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo    '<div class="container" id = "container">'.
                                '<br>'.
                                '<br>'.
                                '           <h3 class="">'.$row["nombre"] .
                                '           </h3>'.
                                '                   <h5 class="">'.'</h5>'.
                                //'                   <p class="card-text">Precio de venta: </p>'.
                                '                   <strong class="price">L.' . $row["precioVenta"] . '</strong>'.
                                '                   <img src="css/images/'.$row["imagenURL"].'.jpg" alt="" width="150" height="150">'.
                                '                   <p><a class="btn btn-primary" href="#" role="button">Ver Producto &raquo;</a></p>'.
                                '           </div>'.
                               
                                
                                '
                        ';
                    }
                } 
                else {
                    echo "0 results";
                }
            ?>
            <!-- End Products -->

        </div>
        <!-- End Content -->


        <!-- Sidebar -->
        <div id="sidebar">

        <!-- Search -->
            <div class="box search">
                <!-- Busqueda -->
                <h2>FILTRAR <span></span></h2>
                <form action="buscar.php" method="post">
                    <fieldset>
                        <legend>Producto:</legend>
                        <input type="text" name="producto" id="producto">
                            <input type="submit" value="Buscar">
                    </fieldset>
                </form>
            </div>
        <!-- End Search -->

        <!-- Categories -->
        <div class="box categories">
            <h2>SELECCIONA UNA CATEGORÍA <span></span></h2>
            <?php
                if ($result2->num_rows > 0) {
                // output data of each row
                    while ($row = $result2->fetch_assoc()) {
                        //--------------------------------------------------------------------------------------------
                        $departamento = $row['descripcion'];       
                        $sql3 = "select sub.descripcion from subdepartamento sub inner join departamento dep on sub.Departamento_idDepartamento=dep.idDepartamento where dep.descripcion='$departamento'";
                        $result3 = $conexion->ejecutarConsulta($sql3);
                        //--------------------------------------------------------------------------------------------
                        echo    '<div class="box-content">
                                    <ul>
                                        <li><a href="index.php">' . $row['descripcion'] . '</a></li>
                                        <h><span></span></h2>        
                                    </ul>
                                </div> ';

                        while ($sub = $result3->fetch_assoc()) {
                            echo    '<div class="box-content">
                                        <ul>
                                            <h10><a href="'.$sub['descripcion'].'.php">' . $sub['descripcion'] . '</h10></li> 
                                            <h><span></span></h2>
                                        </ul>
                                    </div> ';
                                }
                    }
                }else 
                    {
                        echo "No hay resultados";
                    }
            ?>
        </div>
        <!-- End Categories -->
        </div>
        <!-- End Sidebar -->

        <div class="cl">&nbsp;</div>
        </div>
        <!-- End Main -->

        <!-- Side Full -->
        <div class="side-full">
        </div>
        <!-- End Side Full -->
    
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
                            <?php  
                            if(isset($_SESSION["status"])==true){
                            $mensaje = "Usuario: ".$_SESSION["nombre"];
                            echo $mensaje;
                            } ?> 
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

