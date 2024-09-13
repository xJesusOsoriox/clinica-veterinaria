<?php
session_start();
require("../config/conexion.php");

$Alias = $_POST['alias_txt'];
$Especie = $_POST['especie_txt'];
$Raza = $_POST['raza_txt'];
$Color_pelo = $_POST['color_pelo_txt'];
$FechaNac = $_POST['fecha_nacimiento_txt'];
$PesoAct = $_POST['peso_actual_txt'];
$Dueño = $_POST['dueño_txt'];


function generate_string($strength)
{
    $Alias = $_POST['alias_txt'];
    $prefix = mb_strtoupper($Alias, 'UTF-8'); // Convierte todo el apellido paterno a mayúsculas, incluyendo acentos
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

$sql1 = "INSERT INTO mascotas (Codigo, Alias, Especie, Raza, Color_pelo, Fecha_nac, Peso_medio, Peso_actual, Dueño) 
VALUES ('$Codigo', '$Alias', '$Especie', '$Raza', '$Color_pelo', '$FechaNac', '$PesoAct', '$PesoAct', '$Dueño')";

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
    echo '  window.location.href = "nueva_cita.php";';
    echo '});';
    echo '</script>';
} else {
    // Revertir la transacción si el primer INSERT falla
    $conn->rollback();
    echo "No se registraron los datos";
}
?>