
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrarse</title>
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="form-registro" id="form-registro">
					<span class="login100-form-title p-b-51">
						Registrarse
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
						<input class="input100" type="text" name="idpnombre" id="idpnombre" placeholder="Primer Nombre" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nombre Requerido">
						<input class="input100" type="text" name="idsnombre" id="idsnombre" placeholder="Segundo Nombre" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Apellido Requerido">
						<input class="input100" type="text" name="idpapellido" id="idpapellido" placeholder="Primer Apellido" required>
						<span class="focus-input100"></span>
					</div>

					<div class="dropdown validate-input m-b-16">

					  	<select type="text" id="cbx_SeleccioneGenero" name="cbx_SeleccioneGenero" class="form-control m-b-16" placeholder="Seleccione Genero"  data-rule="minlen:4" data-msg="Seleccione un Genero" required>
                      	<option value='0'>Seleccione un Genero</option>
                        <option value='1'>Masculino</option>
                        <option value='2'>Femenino</option>
                        </select>

					</div>
                                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Correo Requerido">
						<input class="input100" type="email" name="idcorreo" id="idcorreo" placeholder="Correo" required autofocus>
						<span class="focus-input100"></span>
					</div>
                                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Contraseña">
						<input class="input100" type="password" name="idcontrasenia" id="idcontrasenia" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						

						
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="btn-continuar" id="btn-continuar" type="submit">
							Continuar
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

