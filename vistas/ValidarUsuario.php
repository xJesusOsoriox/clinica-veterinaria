<?php
require("../config/conexion.php");

	//obtenemos los valores del formulario
	$nombre = $_POST['nombre_txt'];
	$email = $_POST['usuario_txt'];
	$pass = $_POST['password_txt'];
	$rpass = $_POST['rpassword_txt'];

	//Obtiene la longitus de un string
	$req = (strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		echo ".";
		echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
		echo '<script>';
		echo 'Swal.fire({';
		echo '  icon: "error",';
		echo '  title: "Oops...",';
		echo '  text: "Las contraseñas no coinciden",';
		echo '}).then(() => {';
		echo '  window.location.href = "../../registrarse.php";';  
		echo '});';
		echo '</script>';
	}

	else {

		$query="SELECT * from veterinarios where Usuario='$email'";
		$resultado=$conn->query($query);
		$Existente = mysqli_num_rows($resultado);

		if($Existente > 0){
			echo ".";
			echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
			echo '<script>';
			echo 'Swal.fire({';
			echo '  icon: "error",';
			echo '  title: "Oops...",';
			echo '  text: "El correo ya existe, intenta de nuevo con otro correo",';
			echo '}).then(() => {';
			echo '  window.location.href = "../../registrarse.php";';  
			echo '});';
			echo '</script>';
		} else {
		//se encripta la contraseña
	    $contraseñaUser = md5($pass);

	    //ingresamos la informacion a la base de datos
	    $query="INSERT INTO veterinarios (Nombre_veterinario, Usuario,Contraseña) VALUES ('$nombre','$email','$pass')";
  
        //Verificar si si se ejecutó
        $resultado=$conn->query($query);

       if($resultado) {
		echo ".";
		echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
		echo '<script>';
		echo 'Swal.fire({';
		echo '  icon: "success",';
		echo '  title: "Registrado!",';
		echo '  text: "Te has registrado correctamente",';
		echo '}).then(() => {';
		echo '  window.location.href = "../../index.php";';  
		echo '});';
		echo '</script>';
                      }
        else {
        echo "No se registraron los datos";
             }
		    }
	    }


?>