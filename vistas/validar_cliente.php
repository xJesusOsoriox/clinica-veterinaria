<?php
session_start();
require("../config/conexion.php");

$Cuenta = $_POST['cuenta_bancaria_txt'];
$Domicilio = $_POST['domicilio_txt'];
$Telefono = $_POST['telefono_txt'];
$Correo = $_POST['correo_txt'];
$CP = $_POST['codigo_postal_txt'];
$RFC = $_POST['rfc_txt'];
$Apaterno = $_POST['apellido_paterno_txt'];
$Amaterno = $_POST['apellido_materno_txt'];
$Nombre = $_POST['nombre_txt'];

function generate_string($strength)
{
    $Apaterno = $_POST['apellido_paterno_txt'];
    $prefix = mb_strtoupper($Apaterno, 'UTF-8'); // Convierte todo el apellido paterno a mayúsculas, incluyendo acentos
    $numbers = generate_random_numbers(3); // Generar 6 números aleatorios
    return $prefix . $numbers;
}

function generate_random_numbers($length)
{
    $input = '0123456789';
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
$Codigo = generate_string(3);
?>

<?php

$sql1 = "INSERT INTO clientes (Codigo, Cuenta_bancaria, Domicilio, Telefono, Correo, CP, RFC, Apellido_paterno, Apellido_materno, Nombre) 
VALUES ('$Codigo', '$Cuenta', '$Domicilio', '$Telefono', '$Correo', '$CP', '$RFC', '$Apaterno', '$Amaterno', '$Nombre')";

if ($conn->query($sql1) === TRUE) {
    $conn->commit();
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>';
    echo 'Swal.fire({';
    echo '  icon: "success",';
    echo '  title: "Registrado!",';
    echo '  text: "Cliente registrado correctamente",';
    echo '}).then(() => {';
    echo '  window.location.href = "nueva_mascota.php";';
    echo '});';
    echo '</script>';
} else {
    // Revertir la transacción si el primer INSERT falla
    $conn->rollback();
    echo "No se registraron los datos";
}
?>