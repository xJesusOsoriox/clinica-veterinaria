<?php
// Incluir el archivo de conexión a la base de datos
include '../config/conexion.php';

// Recuperar el valor de la especie de la solicitud AJAX
$especie = $_GET['especie'];

// Consulta para obtener las razas asociadas a la especie seleccionada
$consulta = "SELECT * FROM razas WHERE especie = $especie";
$ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

// Construir las opciones del select de raza
foreach ($ejecutar as $raza) {
    $options .= "<option value='" . $raza['id_raza'] . "'>" . $raza['Nombre_raza'] . "</option>";
}

// Devolver las opciones como respuesta a la solicitud AJAX
echo $options;
?>
