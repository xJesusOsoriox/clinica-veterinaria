<?php
$servername = "localhost";
$username = "u183344616_mayorga";
$password = "FenixD2024.";
$database = "u183344616_veterinaria";
/*$password = "";*/

//Conexios php orientada a objetos

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    die("La conexion ha fallado: " .
        mysqli_connect_error());
}
?>