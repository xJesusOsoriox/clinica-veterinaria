<?php
include ('../config/conexion.php');
$correo = $_REQUEST['correo'];

// Verificando si existe algún cliente en BD ya con dicho correo asignado
// Preparamos un arreglo que es el que contendrá toda la información
$jsonData = array();
$selectQuery = ("SELECT Correo FROM clientes WHERE Correo='" . $correo . "' ");
$query = mysqli_query($conn, $selectQuery);
$totalCliente = mysqli_num_rows($query);

// Validamos que la consulta haya retornado información
if ($totalCliente <= 0) {
    $jsonData['success'] = 0;
    // $jsonData['message'] = 'No existe correo ' . $correo;
    $jsonData['message'] = '';
} else {
    // Si hay datos entonces retornas algo
    $jsonData['success'] = 1;
    $jsonData['message'] = '<p style="color:red; font-size:12px; margin-top:-10px;">Correo registrado, intente con otro </p>';
}

// Mostrando mi respuesta en formato JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);
?>