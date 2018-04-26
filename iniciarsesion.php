<?php
  session_start();
  if(isset($_SESSION['status'])){ //Si el estado de la sesion es True, osea ue se han logeado correctamente, se envia directamente al INDEX
    if($_SESSION['status']==true){
      header("Location: index.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesión</title>
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
</head>
<body>
<form class="form-iniciarsesion" id="form-iniciarsesion">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						<!--img class="mb-4" src="2000px-Amazon_logo_plain.svg.png" alt="" width="72" height="72"-->
						Iniciar Sesión
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Correo requerido">
						<input class="input100" type="email" name="username" id="username" placeholder="Correo">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Contraseña es requerida">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="checkbox mb-3">
        				<label>
          					<input type="checkbox" value="remember-me"> Recuérdame
        				</label>
      				</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						
					</div>

					<div class="container-login100-form-btn m-t-5">
						<button class="login100-form-btn" type="submit">
							Continuar
						</button>
					</div>

					<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
					<p class="mt-3 mb-3 text-muted text-center"> JC CORP. &#174;</p>

				</form>
			</div>
		</div>
	</div>
</form>

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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/controlador-sesion.js"></script>
</body>
</html>