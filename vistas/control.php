<?php
require("../config/conexion.php");

$cveusuario = $_POST["usuario_txt"];
$clavepass = $_POST["password_txt"];

$sql = $conn->query("SELECT * FROM veterinarios WHERE Usuario='$cveusuario' and Contraseña='$clavepass'");

if ($datos = $sql->fetch_object()) {

    session_start();
    $_SESSION["msj"] = true;
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $cveusuario;
    header("location:home.php");
} else {
    header("Location: ../../index.php?error=si");
}
?>