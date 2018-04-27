<?php
   session_start();
   /*if($_SESSION['status']==false) { //Si el estado de la sesion es Falsa, osea que no se ha logeado entonces:
   // CUALQUIER USUARIO REGISTRADO PUEDE VER ESTA PAGINA
      session_destroy(); //Se destruye la sesion.
      header("Location: login.php"); //se envia al usuario directo al login.
   }*/

    include("Conexion/class-conexion.php");
    $conexion = new Conexion();

    $query = "SELECT idDepartamento, descripcion FROM Departamento ORDER BY descripcion;";
    $resDeptos = $conexion->ejecutarConsulta($query);


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
</html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Proyecto Final</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	<!--script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"></script>')</script>
    <script>window.jQuery || document.write('<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script-->
	<!-- End JS -->
	<!-- Bootstrap core CSS -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <!--link href="css/jumbotron.css" rel="stylesheet"-->

    <!--Custom-->
    <!--link href="css/custom.css" rel="stylesheet"-->
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>	
		
	
		
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
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->

			<!-- End Content Slider -->
			
			<!-- Products -->

			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Buscar <span></span></h2>
				<div class="box-content">
					<form action="" method="post">
						
						<label>Producto</label>
						<input type="text" class="field" />
						<input type="submit" class="search-submit" value="Buscar" />
						
						
	
					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Departamentos <span></span></h2>
				<div class="box-content">
					<!--ul>
					    <li><a href="#">Categoría1</a></li>
					    <li><a href="#">Categoría2</a></li>
					   
					    <li class="last"><a href="#">Categoría3</a></li>
					</ul-->
					<select id="cbx_Depto" name="cbx_Depto">
                        <option value='0'>Selecciona un Departamento</option>
                            <?php while($rowDeptos = mysqli_fetch_array($resDeptos)) { ?>
                            <option value="<?php echo $rowDeptos[0]; ?>" ><?php echo $rowDeptos[1]; ?> </option>
                            <?php } ?>
                    </select>
                    <select id="cbx_Subdepto" name="cbx_Subdepto"></select>
				</div>
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
			<a href="#">Mi Cuenta</a>
			<span>|</span>
			<a href="#">Ayuda</a>
			<span>|</span>
			  <div class="col-sm-6">
		</p>
		<p class="right">
			&copy; 2018 Shop Around.
			
		</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	<script language="javascript">
        //Combobox de modelos
        $(document).ready(function () {
            $("#cbx_Depto").change(function () {
                $("#cbx_Depto option:selected").each(function () {
                    idDepartamento = $(this).val();
                    $.post("Class/get-Subdeptos.php", {idDepartamento: idDepartamento}, function (data) {
                        $("#cbx_Subdepto").html(data);
                    });
                });
            })
        });
        $(document).ready(function () {
            $("#cbx_Subdepto").change(function () {
                $("#cbx_Subdepto option:selected").each(function () {
                    idSubdepartamento = $(this).val();
                    $.post("Class/get-Productos.php", {idSubdepartamento: idSubdepartamento}, function (data) {
                        $("#cbx_Subdepto").html(data);
                    });
                });
            })
        });

    </script>
	
</body>
</html>