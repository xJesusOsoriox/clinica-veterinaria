<?php
// Incluir el archivo de conexión a la base de datos
include '../config/conexion.php';

// Recuperar el valor de la especie de la solicitud AJAX
$cliente = $_GET['cliente'];

// Consulta para obtener las razas asociadas a la especie seleccionada
$consulta = "SELECT * FROM mascotas WHERE Dueño = $cliente";
$ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

// Construir las opciones del select de raza
foreach ($ejecutar as $paciente) {
    $options .= "<option value='" . $paciente['id_mascota'] . "'>" . $paciente['Alias'] . "</option>";
}

// Devolver las opciones como respuesta a la solicitud AJAX
echo $options;
?>
