<!doctype html>
<html lang="es-MX">

<head>
	<title>Clinica Veterinaria</title>
	<link rel="icon" href="src/images/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="stylesheet" href="./src/css/estilo.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
	<header class="bg_animate">
		<section class="banner contenedor">
			<div class="banner_img">
				<div class="container-page" id="Container">
					<img class="logo1" src="src/images/bgx3.png">
					<div class="login-container" id="LoginContainer">
						<h1 class="title">Inicio de Sesión</h1>

						<form name="autentificacion_frm" action="./src/vistas/control.php" method="POST"
							enctype="application/x-www-form-urlencoded">
							<?php
							error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
							if ($_GET["error"] == "si") {
								echo "<script> Swal.fire(
									'Datos Incorrectos',
									'Verifica tus datos nuevamente',
									'error'
								  )</script>";
							} else {
							}
							?>
							<div id="input-line-container">
								<label class="name-input" for="usuario">Correo Electrónico:</label>
								<input type="email" id="usuario" name="usuario_txt" class="input-line"
									placeholder="Correo Electrónico" maxlength="30"
									oninput="validarCaracteresEspeciales(this)" required tabindex="2" />
							</div>
							<div id="input-line-container">
								<label class="name-input" for="password">Contraseña</label>
								<input type="password" class="input-line" name="password_txt" placeholder="Contraseña"
									maxlength="20" required tabindex="2" />
							</div>
							<button type="submit" class="button-login" tabindex="3">Ingresar</button>
						</form>
						<div class="regisx">
							<a href="registrarse.php">Registrarse</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="burbujas">
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
			<div class="burbuja"></div>
		</div>
	</header>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			document.getElementById("usuario").focus();
		});
	</script>


	<script src="./src/js/jquery.min.js"></script>
	<script src="./src/js/popper.js"></script>
	<script src="./src/js/bootstrap.min.js"></script>
	<script src="./src/js/main.js"></script>
	<script src="./src/js/validadores3.js"></script>

</body>

</html>