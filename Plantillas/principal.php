<?php
   session_start();
   if($_SESSION['status']==false) { //Si el estado de la sesion es Falsa, osea que no se ha logeado entonces:
   // CUALQUIER USUARIO REGISTRADO PUEDE VER ESTA PAGINA
      session_destroy(); //Se destruye la sesion.
      header("Location: iniciarsesion.php"); //se envia al usuario directo al login.
   }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<!-- End JS -->
	
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
			    <li><a href="#" class="active">INICIO</a></li>
			    <li><a  class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" name="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /a></li>
			    <li><a href="registro.php">CARRITO</a></li>
                            <li><a href="logout.php" name= "idsalir" id="idsalir" >SALIR</a></li>
			    
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
				    <li>
				    	<a href="#"><img src="css/images/big1.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>PROXIMAMENTE</h3>
				    		<div class="product-desc">
								
				    			
				    			<strong class="price">L.9,999.99</strong>
				    		</div>
				    	</div>
			    	</li>
			    	<li>
				    	<a href="#"><img src="css/images/big1.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>PROXIMAMENTE</h3>
				    		<div class="product-desc">
								
				    			
				    			<strong class="price">L.9.999.99</strong>
				    		</div>
				    	</div>
			    	</li>
			    	<li class="last">
				    	<a href="#"><img src="css/images/big1.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>PROXIMAMENTE</h3>
				    		<div class="product-desc">
								
				    			
				    			<strong class="price">L.9,999.99</strong>
				    		</div>
				    	</div>
			    	</li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
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
				<h2>Categorías <span></span></h2>
				<div class="box-content">
					<ul>
					    <li><a href="#">Categoría1</a></li>
					    <li><a href="#">Categoría2</a></li>
					   
					    <li class="last"><a href="#">Categoría3</a></li>
					</ul>
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
			
			
		</p>
		<p class="right">
			&copy; 2018 Shop Around.
			
		</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
<script src="../js/controlador-principal.js" type="text/javascript"></script>
</body>
</html>