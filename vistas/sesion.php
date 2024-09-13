<?php
session_start();


if(!$_SESSION["autentificado"]){
    header("Location: salir.php");
}
 
if(isset($_SESSION["msj"])){
	$respuesta = $_SESSION['msj'];
	echo "<script> Swal.fire(
        'Bienvenido',
        '',
        'success')</script>";	?>
	
	
	<?php
	unset($_SESSION["msj"]);
}
?>