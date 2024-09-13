<?php
$servername = "localhost";
$username = "Mayorga";
$password = "Ola123x.";
$database = "veterinaria";
/*$password = "";*/

//Conexios php orientada a objetos

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    die("La conexion ha fallado: " .
        mysqli_connect_error());
}
?>